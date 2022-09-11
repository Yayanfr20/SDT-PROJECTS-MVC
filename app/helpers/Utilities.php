<?php

/*
 * @param return current url if param null
 * @param $path (string)
**/
function url ($path = null) {
  if (!$path) return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $path = $path[0] !== "/" ? "/".$path : $path;
  return BASEURL.$path;
}

/*
 * @param $path (string) path url
**/
function route ($path) {
  $path = str_replace("/", "", $path);
  $url = url();
  $pattern = "/".$path."/i";
  
  return preg_match($pattern, $url);
}

function now () {
  return date("Y-m-d H:i:s");
}

/*
 * @param $method (string) method name
 * @param $code (number) http code response
**/
function method ($method = "GET", $code = 403) {
  $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
  $method = strtoupper($method);
  if ($request_method !== $method) http_response_code($code);
  
  return true;
}