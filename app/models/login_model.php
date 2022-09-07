<?php

class login_model {
   private $tabel = TB_MLTUSR;
   private $db;
   public function __construct() {
      $this -> db = new Database;
   }
   public function getAuten($data) {
      $this -> db -> query("SELECT * FROM {$this->tabel} WHERE username=:user && password=:pass");
      $this -> db -> bind('user', $data['username']);
      $this -> db -> bind('pass', $data['password']);
      return $this -> db -> rowCount();
   }
}