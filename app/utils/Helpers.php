<?php

class Helpers {
  public static function parseView($path) {
    $result = str_replace(".", "/", $path);
    return $result;
  }
  public static function getBASEURL($publicPath) {
    $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
    $domain = $_SERVER["HTTP_HOST"];
    $path_request = $_SERVER["REQUEST_URI"];
    return $protocol.$domain.$publicPath;
  }
}