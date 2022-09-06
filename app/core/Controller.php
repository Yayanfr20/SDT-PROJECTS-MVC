<?php
require_once __DIR__."/../utils/Helpers.php";

class Controller {
	public function view($view, $data = []) {
		require_once __DIR__.'/../../resources/views/' . Helpers::parseView($view) .  '.php';
	}


	public function model($model) {
		require_once '../app/models/' . $model . '.php';
		return new $model;
	}
}