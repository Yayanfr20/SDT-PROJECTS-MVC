<?php
class Controller
{
	public function view($view, $data = [])
	{
  	require_once __DIR__ . '/../views/' . $view .  '.php';
	}


	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model;
	}
	
	public function auth () {
		require_once '../app/core/Auth.php';
	  return new Auth($_SESSION);
	}
}
