<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Domāšanas Stilu Tests" />
    <meta property="og:image" content="<?=$_SERVER['HTTP_HOST'];?>/assets/images/domasanas-stilu-tests-featured_2.png" />
    <link rel="shortcut icon" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php
    if ($request_uri === "/" || $request_uri === "/instrukcija") {
        echo ('<link rel="stylesheet" href="assets/css/pages/page-home.css">');
    } elseif ($request_uri === "/tests") {
        echo ('<link rel="stylesheet" href="assets/css/pages/page-survey.css">');
    } elseif ($request_uri === "/gdpr" || $request_uri === "/apraksts") {
        echo ('<link rel="stylesheet" href="assets/css/pages/page-default.css">');
    } elseif ( $request_uri === "/rezultats" ) {
        echo ('<link rel="stylesheet" href="assets/css/pages/page-results.css">');
    } ?>
    <title>Domāšanas Stilu Tests</title>
</head>
<?php require $content[$request_uri]; ?>
</html>