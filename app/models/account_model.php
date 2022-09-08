<?php

class account_model {
   private $tabel = TB_MLTUSR;
   private $db;
   public function __construct() {
      $this -> db = new Database;
   }
   public function getId($id) {
      $this -> db -> query("SELECT * FROM {$this->tabel} WHERE id=:id");
      $this -> db -> bind("id", $id);
      return $this -> db -> single()['id'];
   }
   public function getInfo($id) {
      $this -> db -> query("SELECT * FROM {$this->tabel} WHERE id=:id");
      $this -> db -> bind("id", $id);
      return $this -> db -> single();
   }
}