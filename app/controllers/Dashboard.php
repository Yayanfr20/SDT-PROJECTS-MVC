<?php
class Dashboard extends Controller
{
   public function index() {
      $this->auth()->check();
      $this->view('Dashboard/layout/header');
      $this->view('Dashboard/index', [
         "judul" => "Dashboard",
         "user" => $this->auth()->user()
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