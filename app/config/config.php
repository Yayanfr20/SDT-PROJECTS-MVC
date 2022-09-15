<?php
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
$domain = $_SERVER["HTTP_HOST"];
$path_request = $_SERVER["REQUEST_URI"];

# kalau di deploy hapus /SDT-PROJECTS-MVC 👍😂

$public = "/SDT-PROJECTS-MVC";
$baseUrl = $protocol.$domain.$public;

define('BASEURL', $baseUrl);
define('DB_HOST', '127.0.0.1');
#define('DB_HOST', '0.0.0.0');
define('DB_USER', 'root');
define('DB_PASS', '1234');
#define('DB_PASS', 'root');
define('DB_NAME', 'sql6517581');
define('TB_MLTUSR','multi_users');
define('TB_POSTING','postingan');
