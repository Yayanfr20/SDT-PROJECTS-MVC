<?php
class Profile extends Controller {
   public function index() {
      $this->auth()->check();
      
      $user = $this->auth()->user();
      // var_dump($user); exit;
      $posts = $this -> model("postingan_model")->getPost($user['name']);
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Profile/index", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "user" => $user,
        "posts" => $posts
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
  
  public function change(){
    method("POST", 403);
    $user = $this->auth()->user();
    if($this -> model('account_model')->getChangeUsername($_POST,$user['id'])>0){
      Flasher::setFlash("Profile Berhasil ", "Di Update !", "success");
     }else{
       Flasher::setFlash("Profile Gagal  ", "Di Update !", "error");
     }
     header('Location:'.BASEURL.'/profile/change_name');
     exit;
  }
 
 public function changePass(){
   method("POST", 403);
    $user = $this->auth()->user();
    if($_POST['newPassword'] == $_POST["confirmPassword"]){
    if($this -> model('account_model')->getChangePassword($_POST,$user['id'])>0){
      Flasher::setFlash("Profile Berhasil ", "Di Update !", "success");
     }else{
       Flasher::setFlash("Profile Gagal  ", "Di Update !", "error");
     }
    }
     header('Location:'.BASEURL.'/profile/change_password');
     exit;
  }
 
 
   public function change_name() {
      $this->auth()->check();
      
      $user = $this->auth()->user();
      
      $this -> view("Dashboard/layout/header", [
          "judul" => "change username"
      ]);
      $this -> view("Dashboard/Profile/change-name", [
        "user" => $user
      ]);
      $this -> view("Dashboard/layout/footer");
   }
   
   
   
   public function change_password() {
      $this->auth()->check();
      
      $user = $this->auth()->user();
      
      $this -> view("Dashboard/layout/header", [
          "judul" => "change username"
      ]);
      $this -> view("Dashboard/Profile/change-password", [
        "user" => $user
      ]);
      $this -> view("Dashboard/layout/footer");
   }
   public function editData(){
     method("POST", 403);
     
     $data = [
       "info" => $_POST,
       "file" => $_FILES['gambar']
      ];
     if($this -> model('account_model')->getEdit($data)){
       Flasher::setFlash("Profile Berhasil ", "Di Update !", "success");
     }else{
       Flasher::setFlash("Profile Gagal  ", "Di Update !", "error");
     }
     header('Location:'.BASEURL.'/profile/edit');
     exit;
   }
   
}