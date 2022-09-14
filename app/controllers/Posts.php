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
          redirect("/post-project");
      }
   }
   
   public function edit($id = null){
     $post = $this->model("postingan_model")->getPostById($id)[0];
     
     $categories = ["php", "javascript", "css", "html", "golang", "reactjs", "python"];
     
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
   
   public function update($param=null){
     echo "<h1>UPDATE</hh1<p>parameter 1 : {$param}";
   }
}