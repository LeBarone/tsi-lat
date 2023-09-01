<?php
// List of allowed actions
$allowedActions = [
    "nextPage",
    "prevPage",
    "newTest",
    "continueTest",
    "sendEmail"
];
// If request method is something else then POST or there isn't valid action, then 404
if ($_SERVER['REQUEST_METHOD'] != 'POST' || (isset($_POST['action']) && !in_array($_POST['action'], $allowedActions))) {
    broken("HTTP POST failed!");
}
// If all conditions are met, execute code
 else {
    $action = $_POST['action'];
    unset($_POST['action']);
    // Based on value of action, determines what to do
    switch ($action) {
        // Starts test from beggining
        case "newTest":
            newTest();
            break;
        // Stores results and redirects to next page
        case "nextPage":
            $page = storeCurrentAnswers($_POST);
            nextPage($page, $ranges);
            break;
        // Stores results and redirects to previous page
        case "prevPage":
            $page = storeCurrentAnswers($_POST);
            prevPage($page);
            break;
        // Continues test keeping results
        case "continueTest":
            continueTest($pages);
            break;
        // Sends test results email
        case "sendEmail":
            $status = sendEmail($_POST, $translations, $levels, $long_descriptions);
            header("Content-Type: application/json");
            echo json_encode($status);
    }
}