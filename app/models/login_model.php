<?php

class login_model {
   private $tabel = TB_MLTUSR;
   private $db;
   public function __construct() {
      $this -> db = new Database;
   }
   public function getAuth($data) {
      $this -> db -> query("SELECT * FROM {$this->tabel} WHERE username=:user");
      $this -> db -> bind("user", $data['username']);
      $data_akun = $this -> db -> single();
      if (password_verify($data['password'], $data_akun['password'])) {
         $this -> makeCokie(MetaHack::encHack($data_akun['id']));
         return $this -> db -> rowCount() > 0 ? true : false;
      } else {
         return false;
      }
   }
   public function makeCokie($id) {
      $_SESSION['ryuxd'] = [
         "id" => $id,
         "ip" => $_SERVER['HTTP_CLIENT_IP'],
         "user-agent" => $_SERVER['HTTP_USER_AGENT']
      ];
   }
}