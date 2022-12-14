<?php
class Post_project extends Controller {
   public function index() {
      $this->auth()->check();
      
      $user = $this->auth()->user();
      
      $categories = ["php", "javascript", "css", "html", "golang", "python"];
      
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Post/create", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "categories" => $categories,
        "user" => $user
      ]);
      $this -> view("Dashboard/layout/footer");
   }
   public function upload(){
     method("POST", 401);
     $file = $_FILES["images"];
     $pathfile = Helper::uploadFile ($file, "/assets/static/");
     var_dump($pathfile);
     if ($this -> model('postingan_model')->upload($_POST, $pathfile)){
       Flasher::setFlash("Berhasil ","Di Upload !","success");
     } else {
       Flasher::setFlash("Gagal ","Di Upload !","error");
     }
     header("Location:".BASEURL."/post-project");
     exit;
   }
}