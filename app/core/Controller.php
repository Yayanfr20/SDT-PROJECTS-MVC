<?php
class Controller
{
	public function view($view, $data = ["default" => null])
	{
	  extract($data, EXTR_OVERWRITE);
  	  require_once __DIR__ . '/../views/' . $view .  '.php';
	}


	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model;
	}
	
	public function auth () {
	   $id = $this->model("account_model")->getId(MetaHack::decHack($_SESSION['ryuxd']['id']));
	   $data = $this->model("account_model")->getInfo(MetaHack::decHack($_SESSION['ryuxd']['id']));
	   return new Auth($id, $data);
	}
	

}