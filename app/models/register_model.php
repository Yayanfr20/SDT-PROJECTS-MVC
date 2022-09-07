<?php

class register_model {
   private $tabel = TB_MLTUSR;
   private $db;
   public function  __construct() {
      $this -> db = new Database;
   }
   public function getReg($data) {
      $this -> db -> query("INSERT INTO {$this->tabel} (username,password) VALUES (:usr,:pass)");
      $this -> db -> bind('usr', $data['username']);
      $this -> db -> bind('pass', $data['password']);
      return $this -> db -> rowCount();
   }
}