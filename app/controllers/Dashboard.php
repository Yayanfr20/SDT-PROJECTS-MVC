<?php
class Dashboard extends Controller
{
   public function index() {
      $this -> auth ();
      $data['judul'] = 'Dashboard';
      $this->view('Dashboard/layout/header', $data);
      $this->view('Dashboard/index');
      $this->view('Dashboard/layout/footer');
   }
   public function logout() {
      unset($_SESSION['ryuxd']);
      session_destroy();
      header("Location:".BASEURL.'/Login');
      exit;
   }
}