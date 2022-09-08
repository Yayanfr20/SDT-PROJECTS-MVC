<?php
class Dashboard extends Controller
{
   public function index() {
      $id = $this -> model("account_model")->getId($_SESSION['ryuxd']['id']);
      
      if (isset($_SESSION['ryuxd'])) {
         if ($_SESSION['ryuxd']['id'] != $id) {
            header("Location:".BASEURL."/Login");
            exit;
         }
      } else {
         header("Location:".BASEURL."/Login");
         exit;
      }
      
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