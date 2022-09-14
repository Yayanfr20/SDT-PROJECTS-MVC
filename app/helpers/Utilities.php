<?php

/*
 * @param $path (string)
 * @return (string)
**/
function url ($path = null) {
  if (!$path) return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $path = $path[0] !== "/" ? "/".$path : $path;
  return BASEURL.$path;
}

/*
 * @param $path (string) path url
 * @return (boolean)
**/
function route ($path) {
  $path = str_replace("/", "", $path);
  $url = url();
  $pattern = "/".$path."/i";
  
  return preg_match($pattern, $url);
}

/*
 * @param $option (string)
 * @return date() with parameter binding
**/
function now ($option = "full") {
  $rules = [
    "full" => date("Y-m-d H:i:s"),
    "date" => date("Y-m-d"),
    "time" => date("H:i:s")
  ];
  
  $flattened = $rules;
  array_walk($flattened, function(&$value, $key) {
      $value = $key;
  });
  
  if (gettype($option) !== "string") throw new Exception("argument 1 must be string ". gettype($option) . " given");
  if (!isset($rules[$option])) throw new Exception("argument 1 must be ". implode(", ", $flattened) . " but '$option' given");
  
  return $rules[$option];
}

/*
 * @param $method (string) method name
 * @return $code (number) http code response
**/
function method ($method = "GET", $code = 403) {
  $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
  $method = strtoupper($method);
  if ($request_method !== $method) http_response_code($code);
  
  return true;
}

/*
 * @param $path (string)
**/
function redirect($path = "/") {
  $dest = url($path);
  header("location: $dest");
  exit;
}