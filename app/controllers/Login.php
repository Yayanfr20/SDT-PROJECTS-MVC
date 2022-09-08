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
      $user = $_POST['username'];
      $pass = $_POST['password'];
      $data = [
         "username" => $user,
         "password" => $pass
      ];

      if ($this -> model('login_model')->getAuth($data)) {
         Flasher::setFlash("Berhasil ", " login !", "success");
         header('Location:'.BASEURL.'/Dashboard');
         exit;
      } else {
         Flasher::setFlash("Gagal ", "login !", "error");
         header("Location:".BASEURL."/Login");
      exit;
      }
   }
}