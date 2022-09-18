<?php

class online_model {
   private $tabel = TB_ONLINE;
   private $multi_user = TB_MLTUSR;
   private $db;
   
   public function __construct() {
      $this -> db = new Database;
   }
   
   public function setOnline($data) {
      $this -> db -> query("INSERT INTO {$this->tabel} (user_id) VALUES (:uid)");
      $this -> db -> bind("uid", $data["uid"]);
      
     return $this -> db -> rowCount();
   }
   
   public function setOffline($data) {
      $this -> db -> query("DELETE FROM {$this->tabel} WHERE user_id=:uid");
      $this -> db -> bind("uid", $data["uid"]);
      
     return $this -> db -> rowCount();
   }
   
   public function getOnline() {
    $this -> db -> query("SELECT * FROM {$this->tabel} INNER JOIN {$this->multi_user} ON {$this->multi_user}.id = {$this->tabel}.user_id");
    
    return $this -> db -> resultSet();
   }
}