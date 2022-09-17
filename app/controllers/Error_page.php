<?php
class Error_page extends Controller
{
   public function index($code = 404, $message = "Forbidden") {
     
      $this->view('templates/header', [
        "judul" => $code . " | " . $message
      ]);
      $this->view('Errors/index', [
         "code" => $code,
         "message" => $message
      ]);
      $this->view('templates/footer');
   }
}