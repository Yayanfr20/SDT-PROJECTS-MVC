<?php

/*
 * @param return current url if param null
 * @param $pwth (string)
*/
function url ($path = null) {
  if (!$path) return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $path = $path[0] !== "/" ? "/".$path : $path;
  return BASEURL.$path;
}

function route ($path) {
  $path = str_replace("/", "", $path);
  $url = url();
  $pattern = "/".$path."/i";
  
  return preg_match($pattern, $url);
}

function now () {
  return date("Y-m-d H:i:s");
}