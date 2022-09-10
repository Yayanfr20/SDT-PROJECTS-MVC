<?php
class Profile extends Controller {
   public function index() {
      $this->auth()->check();
      
      $user = $this->auth()->user();
      
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Profile/index", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "user" => $user
      ]);
      $this -> view("Dashboard/layout/footer");
   }
   
   public function edit() {
      $this->auth()->check();
      
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Profile/edit", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "user" => $user
      ]);
      $this -> view("Dashboard/layout/footer");
     
   }
}