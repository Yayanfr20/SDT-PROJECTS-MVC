<?php
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
$domain = $_SERVER["HTTP_HOST"];
$path_request = $_SERVER["REQUEST_URI"];

$public = "/public";
$baseUrl = $protocol.$domain.$public;

define('BASEURL', $baseUrl);
define('DB_HOST', 'sql6.freesqldatabase.com');
define('DB_USER', 'sql6517581');
define('DB_PASS', 'gBUpq1uWYV');
define('DB_NAME', 'sql6517581');
