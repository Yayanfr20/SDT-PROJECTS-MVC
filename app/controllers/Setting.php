<?php
class Setting extends Controller {
   public function index() {
      //$this->auth()->check();
      
      $user = $this->auth()->user();
      
      $this -> view("Dashboard/layout/header");
      $this -> view("Dashboard/Setting/index", [
        "judul" => "profile ". ($user->name ?? "unknown"),
        "user" => $user
      ]);
      $this -> view("Dashboard/layout/footer");
   }
   public function delete(){
     if($this -> model("account_model")->getDelete(MetaHack::decHack($_SESSION['ryuxd']['id']))>0){
       Flasher::setFlash("Berhasil ","Di Hapus !","success");
       header("Location:".BASEURL."/Login");
       exit;
     }else{
       Flasher::setFlash("Gagal ","Di Hapus !","error");
       header("Location:".BASEURL."/Setting");
       exit;
     }
   }
}