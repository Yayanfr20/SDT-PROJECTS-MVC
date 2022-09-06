<?php
require_once __DIR__ . "/../utils/Helpers.php";

class Config
{
  const PUBLIC = "/public";
}

define('BASEURL', Helpers::getBASEURL(Config::PUBLIC));
define('DB_HOST', 'sql6.freesqldatabase.com');
define('DB_USER', 'sql6517581');
define('DB_PASS', 'gBUpq1uWYV');
define('DB_NAME', 'sql6517581');
