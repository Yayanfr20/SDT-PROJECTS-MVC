<?php
class postingan_model{
  private $tabel = TB_POSTING;
  private $db;
  
  public function __constructor(){
    $this -> db = new Database;
  }
  
  public function upload ($data, $pathfile) {
    $this -> db -> query("INSERT INTO {$this->tabel} (title, demo, source, deskripsi, kategori, images, date) VALUES (:title, :demo, :source, :deskripsi, :kategori, :images, :date)");
    
    $this -> db -> bind('title', $data['title']);
    $this -> db -> bind('demo', $data['demo']);
    $this -> db -> bind('source', $data['source']);
    $this -> db -> bind('deskripsi', $data['deskripsi']);
    $this -> db -> bind('kategori', $data['kategori']);
    $this -> db -> bind('images', $pathfile);
    $this -> db -> bind('date', now());
    
    return $this -> db -> rowCount() > 0 ? true : false;
  }
}