<?php
class Login extends Controller
{
   public function index() {
      $data['judul'] = 'login page';
      $this->view('templates/header', $data);
      $this->view('LoginPage/index');
      $this->view('templates/footer');
   }

   public function about() {
      $data['judul'] = 'About';
      $this->view('templates/header', $data);
      $this->view('LandingPage/about');
      $this->view('templates/footer');
   }
   public function autentikasi() {
      if ($this -> model('login_model')->getAuten($_POST) > 0) {
         Flasher::setFlash("Berhasil !", "Login", "success");
         header("Location:".BASEURL."/Login");
         exit;
      } else {
         Flasher::setFlash("Gagal !", "Login", "danger");
         header("Location:".BASEURL."/Login");
         exit;
      }
   }
}