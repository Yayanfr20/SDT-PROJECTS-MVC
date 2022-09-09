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
	   $id = $this -> model("account_model")->getId(MetaHack::decHack($_SESSION['ryuxd']['id']));

      if (isset($_SESSION['ryuxd'])) {
         if (MetaHack::decHack($_SESSION['ryuxd']['id']) != $id) {
            header("Location:".BASEURL."/Login");
            exit;
         }
      } else {
         header("Location:".BASEURL."/Login");
         exit;
      }
	}
	
}
