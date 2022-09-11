<?php
class Profile extends Controller {
   public function index() {
      $this->auth()->check();
      
      $user = $this->auth()->user();
      $postingan = $this -> model("postingan_model")->getPost($user['name']);
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Profile/index", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "user" => $user,
        "postingan" => $postingan
      ]);
      $this -> view("Dashboard/layout/footer");
   }
   
   public function edit() {
      
      $this->auth()->check();
      $user = $this->auth()->user();
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Profile/edit", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "user" => $user
      ]);
      $this -> view("Dashboard/layout/footer");
     
   }
   public function editData(){
     $data = [
       "info" => $_POST,
       "file" => $_FILES['gambar']
      ];
     if($this -> model('account_model')->getEdit($data)>0){
       Flasher::setFlash("Profile Berhasil ", "Di Update !", "success");
       header('Location:'.BASEURL.'/profile/edit');
       exit;
     }else{
       Flasher::setFlash("Profile Gagal  ", "Di Update !", "error");
       header('Location:'.BASEURL.'/profile/edit');
       exit;
     }
   }
}