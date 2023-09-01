<?php
// Starts session to store test data
session_start();
// Includes necessary files
require_once('data.php');
require_once('functions.php');
// Finds where user wants to navigate
$request_uri = $_SERVER['REQUEST_URI'];
// List of allowed routes
$content = [
    '/' => 'home.php',
    '/post' => 'post.php',
    '/gdpr' => 'gdpr.php',
    '/apraksts' => 'about.php',
    '/instrukcija' => 'instruction.php',
    '/tests' => 'test.php',
    '/rezultats' => 'results.php'
];
// If theres no route: page 404, else include content page
if (!array_key_exists($request_uri, $content)) {
    broken();
} elseif($request_uri == '/post') {
    require_once('post.php');
} else {
    require_once('html.php'); 
}