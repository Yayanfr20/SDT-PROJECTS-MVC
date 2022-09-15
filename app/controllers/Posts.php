<?php
class Posts extends Controller {
   public function index($param1 = null, $param2 = null) {
      $this->auth()->check();
      
      switch($param2){
        case 'edit':
          $this -> edit($param1);
          break;
        case 'update':
          $this -> update($param1);
          break;
        default:
          redirect("/dashboard");
      }
   }
   
   public function edit($id = null){
     $post = $this->model("postingan_model")->getPostById($id)[0];
     
     $categories = ["php", "javascript", "css", "html", "golang", "python"];
     
     $this->view('Dashboard/layout/header', [
       "judul" => "edit postingan"
     ]);
     $this->view('Dashboard/Post/edit', [
       "user" => $this->auth()->user(),
       "categories" => $categories,
       "post" => $post
     ]);
     $this->view('Dashboard/layout/footer');
   }
   
   public function update(){
     method("POST", 401);
     $file = $_FILES["images"];
     $pathfile = Helper::uploadFile ($file, "/assets/static/");
     var_dump($pathfile);
     if ($this -> model('postingan_model')->edit($_POST, $pathfile)){
       Flasher::setFlash("Berhasil ","Di Upload !","success");
     } else {
       Flasher::setFlash("Gagal ","Di Upload !","error");
     }
     redirect("/dashboard");
   }
}