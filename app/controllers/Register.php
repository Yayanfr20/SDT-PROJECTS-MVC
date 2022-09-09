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
      $user = strtolower($_POST['name']);
      $pass = strtolower($_POST['password']);
      $email = strtolower($_POST['email']);
      $cpass = strtolower($_POST['confirmPassword']);
      $randomX = mt_rand(111, 999);
      $randomY = mt_rand(111, 999);
      $random = mt_rand($randomX,$randomY);
      $data = [
         "name" => htmlspecialchars($user),
         "username" => "{$user}{$random}",
         "email" => htmlspecialchars($email),
         "password" => password_hash(htmlspecialchars($pass), PASSWORD_DEFAULT)
      ];
      if (strlen($user) != 0 && strlen($pass) != 0) {
         if ($pass == $cpass) {
            if ($this -> model("register_model")->getReg($data) > 0) {
               Flasher::setFlash("Berhasil ", "di daftarkan !", "success");
            } else {
               Flasher::setFlash("Gagal ", "di daftarkan !", "error");
            }
         } else {
            Flasher::setFlash("Bro 😓", "password tidak sesuai!", "warning");
         }
      } else {
         Flasher::setFlash("Bro 😓", "jangan kosong !", "warning");
      }
      header("Location:".BASEURL."/Register");
      exit;
   }
}