<?php
class Dashboard extends Controller
{
   public function index() {
      $this->auth()->check();
      
      $allPosts = $this->model("postingan_model")->getAllPost();
      $this->view('Dashboard/layout/header');
      $this->view('Dashboard/index', [
         "judul" => "Dashboard",
         "user" => $this->auth()->user(),
         "posts" => $allPosts
      ]);
      $this->view('Dashboard/layout/footer');
   }
   public function logout() {
      unset($_SESSION['ryuxd']);
      session_destroy();
      header("Location:".BASEURL.'/Login');
      exit;
   }
}