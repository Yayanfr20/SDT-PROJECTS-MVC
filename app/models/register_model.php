<?php

class register_model {
   private $tabel = TB_MLTUSR;
   private $db;
   public function __construct() {
      $this -> db = new Database;
   }
   public function getReg($data) {
      $this -> db -> query("INSERT INTO {$this->tabel} (name,username,email,password) VALUES (:name,:usr,:email,:pass)");
      $this -> db -> bind('usr', $data['username']);
      $this -> db -> bind('name', $data['name']);
      $this -> db -> bind('email', $data['email']);
      $this -> db -> bind('pass', $data['password']);
      return $this -> db -> rowCount();
   }
}