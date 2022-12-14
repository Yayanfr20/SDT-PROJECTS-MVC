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
   public function getByUsername($username) {
      $this -> db -> query("SELECT * FROM {$this->tabel} WHERE username='$username'");
      
      return $this -> db -> resultSet()[0];
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
     return $this -> db -> rowCount() > 0 ? true : false;
     #return true;
   }
   public function getDelete($id){
     $this -> db -> query("DELETE FROM {$this->tabel} WHERE id=:id");
     $this -> db -> bind('id',$id);
     return $this -> db -> rowCount();
   }
   public function getChangeUsername($data,$id){
     $this -> db -> query("SELECT * FROM {$this->tabel} WHERE id=:id");
     $this -> db -> bind("id",$id);
     $hasil = $this -> db -> single();
     if(password_verify($data['password'],$hasil['password'])){
       $this -> db -> query("UPDATE {$this->tabel} SET username=:username WHERE id=:id");
       $this -> db -> bind("username",$data['username']);
       $this -> db -> bind("id",$id);
       return $this ->db -> rowCount();
     }else{
        return false;
     }
   }
   
   public function getChangePassword($data,$id){
     $this -> db -> query("SELECT * FROM {$this->tabel} WHERE id=:id");
     $this -> db -> bind("id",$id);
     $pass = password_hash(htmlspecialchars($data['password']), PASSWORD_DEFAULT);
     $hasil = $this -> db -> single();
     if(password_verify($data['password'],$hasil['password'])){
       $this -> db -> query("UPDATE {$this->tabel} SET password=:pass WHERE id=:id");
       $this -> db -> bind("pass",$pass);
       $this -> db -> bind("id",$id);
       return $this ->db -> rowCount();
     }else{
        return false;
     }
   }
}