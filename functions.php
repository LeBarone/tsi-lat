<?php

function calculateResults($post){
    // Counts all responses for each style    
    $legislative = ($post['s5'] + $post['s10'] + $post['s14'] + $post['s32'] + $post['s49']) / 5;
    $executive = ($post['s8'] + $post['s11'] + $post['s12'] + $post['s31'] + $post['s39']) / 5;
    $judicial = ($post['s20'] + $post['s23'] + $post['s42'] + $post['s51'] + $post['s57']) / 5;
    $global = ($post['s7'] + $post['s18'] + $post['s38'] + $post['s48'] + $post['s61']) / 5;
    $local = ($post['s1'] + $post['s6'] + $post['s24'] + $post['s44'] + $post['s62']) / 5;
    $liberal = ($post['s45'] + $post['s53'] + $post['s58'] + $post['s64'] + $post['s65']) / 5;
    $conservative = ($post['s13'] + $post['s22'] + $post['s26'] + $post['s28'] + $post['s36']) / 5;
    $hierarchical = ($post['s4'] + $post['s19'] + $post['s33'] + $post['s25'] + $post['s56']) / 5;
    $monarchic = ($post['s2'] + $post['s43'] + $post['s50'] + $post['s54'] + $post['s60']) / 5;
    $oligarchic = ($post['s27'] + $post['s29'] + $post['s30'] + $post['s52'] + $post['s59']) / 5;
    $anarchic = ($post['s16'] + $post['s21'] + $post['s35'] + $post['s40'] + $post['s47']) / 5;
    $internal = ($post['s9'] + $post['s15'] + $post['s37'] + $post['s55'] + $post['s63']) / 5;
    $external = ($post['s3'] + $post['s17'] + $post['s34'] + $post['s41'] + $post['s46']) / 5;
    // Puts results in associative array
    $results = [
        "functions" => [
            "legislative" => $legislative,
            "executive" => $executive,
            "judicial" => $judicial
        ],
        "level" => [
            "global" => $global,
            "local" => $local
        ],
        "orientation" => [
            "liberal" => $liberal,
            "conservative" => $conservative
        ],
        "forms" => [
            "hierarchical" => $hierarchical,
            "monarchic" => $monarchic,
            "oligarchic" => $oligarchic,
            "anarchic" => $anarchic
        ],
        "fields" => [
            "internal" => $internal,
            "external" => $external
            ]
    ];
    return $results;
}

function filterResults($results, $ranges){
    $filtered = [];
    $level = "";
    global $levelOrder;
    // Loops through results
    foreach($results as $group => $styles){
        foreach($styles as $style => $score){
            // Gets ranges for current style
            $style_ranges = $ranges[$style];
            // Goes through ranges to find in what range users answers are
            $level = getLevel($ranges, $style, $score);
            $filtered[$group][$style] =['score' => $score, 'level' => $level];
        }
    }
    // Filter results to get only useful results
    $filteredArray = [];
    foreach ($filtered as $categoryKey => $category) {
        $filteredCategory = [];
        foreach ($category as $subcategoryKey => $subcategory) {
            if (isset($subcategory['level']) && isset($levelOrder[$subcategory['level']])) {
                $filteredCategory[$subcategoryKey] = $subcategory;
            }
        }
        $filteredArray[$categoryKey] = $filteredCategory;
    }
    // Sort results by highest level no score
    $sortedArray = [];
    foreach ($filteredArray as $key => $subArray) {
        if (!empty($subArray)) {
            uasort($subArray, "compareLevels");
            $sortedArray[$key] = $subArray;
        }
    }
    return $sortedArray;
}

function getLevel($ranges, $style, $score){
    // Calculates in what range the result is in
    $ranges = $ranges[$style];
    $level = "";
    foreach ($ranges as $range => $values) {
        $start = $values[0];
        $end = $values[1];
        if ($score >= $start && $score <= $end) {
            $level = $range;
            break;
        }
    }
    return $level;
}

function compareLevels($a, $b) {
    // Function for comparing level order
    global $levelOrder;
    return $levelOrder[$b["level"]] - $levelOrder[$a["level"]];
}

function prevPage($page){
    // If there is previous page then go to it, if not, then 404
    if ($page > 1){
        $_SESSION['next_page'] = ($page - 1);
        header("Location: /tests");
        exit;
    } else {
        broken();
    }
}

function newTest(){
    // Clears session of any data and starts test form beggining
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_destroy();
        session_start();
        // Accepts privacy policy
        $_SESSION['gdpr'] = true;
    }
    header("Location: /tests");
    exit;
}

function nextPage($page, $ranges){
    // If user sumbitted last (8) page, calculate, store in database, filter and redirect to results page
    if ($page == 8){
        if(isset($_SESSION['sent']) && isset($_SESSION['results']) && $_SESSION['sent'] == 1){
            header("Location: /rezultats");
            exit;
        }
        $results = calculateResults($_SESSION['data']);
        $sent = storeSQL($results, $_SESSION['data']);
        $sent ? $_SESSION['sent'] = 1 : broken("Next Page");
        $filtered = $results ? filterResults($results, $ranges) : broken("Next Page");
        $_SESSION['results'] = $filtered;
        header("Location: /rezultats");
        exit;
        // Else increment page number and continue test
    } else {
        $_SESSION['next_page'] = ($page + 1);
        header("Location: /tests");
        exit;
    }
}

function storeCurrentAnswers($post){
    // Temporary array to store results
    $post_data = [];
    // Seperate results from page value
    foreach ($post as $key => $value) {
        if (preg_match('/^s\d*/', $key)) {
            $post_data[$key] = $value;
        } elseif ($key == "page") {
            $_SESSION['page'] = (int)$value;
        }
    }
    // If there already is session then merge, if not create
    if (!empty($_SESSION['data'])) {
        $_SESSION['data'] = array_merge($_SESSION['data'], $post_data);
    } else {
        $_SESSION['data'] = $post_data;
    }
    // If page is set, then return page, if not, return 1
    return $_SESSION['page'] ? $_SESSION['page'] : 1;
}

function continueTest($pages){
    // Should be accessible only when there is some stored data already
    $data = isset($_SESSION['data']) ? $_SESSION['data'] : broken();
    // Find the largest key from the "data" array
    $legth = count($data);
    // Search for the page that contains the largest key
    $targetPage = null;
    foreach ($pages as $page => $keys) {
        if (in_array("s$legth", $keys)) { 
            $targetPage = $page;
            break;
        }
    }
    $_SESSION['next_page'] = $targetPage !== null ? $targetPage : broken();
    header("Location: /tests");
    exit;
}

function broken($message = "Oh no, you've uncovered our super-secret page that doesn't actually exist.") {
    // Clear any previously sent output
    ob_clean();
    // Set the HTTP 404 status
    header('HTTP/1.0 404 Not Found');
    // Include the 404 page content
    include('404.php');
    // Terminate the script
    exit;
}

function checkMe($id, $i){
    // Checks if test field is saved in session
    if(isset($_SESSION['data'][$id]) && $_SESSION['data'][$id] == $i){
        // If saved and it's first checkbox, add checked and required values
        if($i == 1){
            return "checked required";
            // If it's not first but only saved, add checked
        } else {
            return "checked";
        }
        // If it's not saved, but it's first, add required
    } elseif($i == 1) {
        return "required";
        // If it's not saved and not first, add nothing
    } else {
        return "";
    }
}

function sendEmail($post, $translations, $levels, $long_descriptions){
    // Checks if user already got an email
    if(isset($_SESSION['email'])){
        $response = array(
            "success" => false,
            "message" => "E-pasts jau tika nosūtīts!"
        );
        return $response;
    }
    // Results is used by mail.php later
    $results = $_SESSION['results'];
    // Configuraion file for email server
    $config = parse_ini_file('config.ini');
    // Include mail.php for email template
    require_once('mail.php');
    // Configure mail server
    ini_set("SMTP", $config['smtp_host']);
    ini_set("smtp_port", $config['smtp_port']);
    ini_set("sendmail_from", $config['sendmail_from']);
    ini_set("smtp_auth", $config['smtp_auth']);
    ini_set("smtp_username", $config['smtp_username']);
    ini_set("smtp_password", $config['smtp_password']);
    // Sends email
    $to = $post['email-address'];
    $subject = "Testa rezultāti";
    $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: Domāšanas Stilu Tests <noreply@domasanas-stili.lv>\r\n";
        $mailed = @mail($to, $subject, $html, $headers);
    // Return 1 or 0 depending success
    $result = (bool) $mailed;
    $_SESSION['email'] = $result ? 1 : $_SESSION['email'];
    $message = $result ? "E-pasts nosūtīts!" : "E-pastu neizdevās nosūtīt!";

    $response = array(
        "success" => $result,
        "message" => $message
    );
    return $response;
}

function storeSQL($results, $data){
    // Parse config file
    $config = parse_ini_file('config.ini');
    $servername = $config['sql_servername'];
    $username = $config['sql_username'];
    $password = $config['sql_password'];
    $database = $config['sql_database'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        broken("SQL problems");
    }
    // Flatten the array
    $flattenedArray = array_reduce($results, function ($carry, $item) {
    return array_merge($carry, $item);
    }, []);
    // Preperes sql statement by comma seperating array keys and values
    $columns = implode(', ', array_keys($flattenedArray));
    $placeholders = implode(', ', array_fill(0, count($flattenedArray), '?'));
    // Converts data to json for storage 
    $json = json_encode($data);
    // Prepare the statement
    $stmt = $conn->prepare("INSERT INTO results ($columns, json) VALUES ($placeholders, ?)");
    // Check if statement is valid
    if (!$stmt) {
        broken("Error in prepared statement");
    }
    // Bind parameters: values and json
    $bindTypes = str_repeat('d', count($flattenedArray)) . 's';
    $bindValues = array_merge(array_values($flattenedArray), [$json]);
    $stmt->bind_param($bindTypes, ...$bindValues);
    // Execute the statement
    $sent = $stmt->execute();
    // Close the statement
    $stmt->close();
    // Close connection
    $conn->close();
    // Return the result of execution (true or false)
    return $sent;
}