<?php
class Register extends Controller
{
   public function index() {
      $data['judul'] = 'Register page';
      $this->view('templates/header', $data);
      $this->view('RegisterPage/index');
      $this->view('templates/footer');
   }
}