<?php
require_once __DIR__."/../utils/Helpers.php";

class Config {
  const PUBLIC = "/public";
}

define('BASEURL', Helpers::getBASEURL(Config::PUBLIC));
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sdt_projects_mvc');
