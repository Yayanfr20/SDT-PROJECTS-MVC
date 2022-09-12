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
   public function getEdit($d){
     $file = $d['file'];
     $data = $d['info'];
     $gambar = Helper::uploadFile($file,"/assets/static/");
     $this -> db -> query("UPDATE {$this->tabel} SET name=:name,alamat=:alamat,tanggal_lahir=:tgl,gambar=:gm WHERE id=:id");
     $this -> db -> bind('name',$data['name']);
     $this -> db -> bind('alamat',$data['address']);
     $this -> db -> bind('tgl',$data['birthdate']);
     $this -> db -> bind('gm',$gambar);
     $this -> db -> bind('id',$data['id']);
     return $this -> db -> rowCount();
     #return true;
   }
   public function getDelete($id){
     $this -> db -> query("DELETE FROM {$this->tabel} WHERE id=:id");
     $this -> db -> bind('id',$id);
     return $this -> db -> rowCount();
   }
}