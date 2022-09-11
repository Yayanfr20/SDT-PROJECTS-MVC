<?php
class Post_project extends Controller {
   public function index() {
      $this->auth()->check();
      
      $user = $this->auth()->user();
      
      $categories = ["php", "javascript", "css", "html", "golang", "reactjs", "python"];
      
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Post/create", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "categories" => $categories
      ]);
      $this -> view("Dashboard/layout/footer");
   }
   public function upload(){
     if (!$_POST || !$_FILES) http_response_code(403);
     $file = $_FILES["images"];
     $pathfile = Helper::uploadFile ($file, "/assets/static/");
     if($this -> model('postingan_model')->upload($_POST, $pathfile)){
       
     }
   }
}