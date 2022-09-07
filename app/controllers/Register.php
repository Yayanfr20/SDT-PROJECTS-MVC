<?php
class Register extends Controller
{
   public function index() {
      $data['judul'] = 'Register page';
      $this->view('templates/header', $data);
      $this->view('RegisterPage/index');
      $this->view('templates/footer');
   }
   public function reg() {
      $user = strtolower($_POST['username']);
      $pass = strtolower($_POST['password']);
      $cpass = strtolower($_POST['confirmPassword']);
      $data = [
         "username" => htmlspecialchars($user),
         "password" => password_hash(htmlspecialchars($pass), PASSWORD_DEFAULT)
      ];
      if (strlen($user) != 0 && strlen($pass) != 0) {
         if ($pass == $cpass) {
            if ($this -> model("register_model")->getReg($data) > 0) {
               Flasher::setFlash("Berhasil ", "di daftarkan !", "success");
            } else {
               Flasher::setFlash("Gagal ", "di daftarkan !", "danger");
            }
         } else {
            Flasher::setFlash("Bro 😓", "confirm password tidak sesuai!", "warning");
         }
      } else {
         Flasher::setFlash("Bro 😓", "isi form jangan kosong !", "warning");
      }
      header("Location:".BASEURL."/Register");
      exit;
   }
}