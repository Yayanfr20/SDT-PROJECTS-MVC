<?php
class profil extends Controller {
   public function index() {
      $this -> view("Dashboard/layout/header", $data);
      $this -> view("profil/index");
      $this -> view("Dashboard/layout/footer");
   }
}