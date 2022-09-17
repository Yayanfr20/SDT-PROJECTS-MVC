<?php
class postingan_model{
  private $tabel = TB_POSTING;
  private $multi_user = TB_MLTUSR;
  private $db;
  
  public function __construct(){
    $this -> db = new Database;
  }
  public function getPost($nm){
    $this -> db -> query("SELECT * FROM {$this->tabel} INNER JOIN {$this->multi_user} ON {$this->multi_user}.id = {$this->tabel}.author WHERE author=:nm");
    $this -> db -> bind('nm',$nm);
    return $this -> db -> resultSet();
  }
  public function getPostById($id){
    $this -> db -> query("SELECT * FROM {$this->tabel} WHERE id=:id");
    $this -> db -> bind('id', $id);
    return $this -> db -> resultSet();
  }
  public function getAllPost(){
    $this -> db -> query("SELECT * FROM {$this->tabel}");
    return $this -> db -> resultSet();
  }
  public function getPostCategories($name) {
    $this -> db -> query("SELECT kategori FROM {$this->tabel} WHERE author=:name");
    $this -> db -> bind('name',$name);
    
    return $this -> db -> resultSet();
  }
  public function upload($data, $pathfile) {
    $this -> db -> query("INSERT INTO {$this->tabel} (title, demo, source, deskripsi, kategori, images, date, author) VALUES (:title, :demo, :source, :deskripsi, :kategori, :images, :date,:atr)");
    $this -> db -> bind('title', $data['title']);
    $this -> db -> bind('demo', $data['demo']);
    $this -> db -> bind('source', $data['source']);
    $this -> db -> bind('deskripsi', $data['deskripsi']);
    $this -> db -> bind('kategori', $data['kategori']);
    $this -> db -> bind('images', $pathfile);
    $this -> db -> bind('atr', $data['author']);
    $this -> db -> bind('date', now());
    
    return $this -> db -> rowCount() > 0 ? true : false;
  }
  public function edit($data, $pathfile) {
    $this -> db -> query("UPDATE {$this->tabel} SET title=:title,demo=:demo,source=:source,deskripsi=:deskripsi,kategori=:kategori,images=:images, date=:date, author=:atr WHERE id=:id");
    $this -> db -> bind('title', $data['title']);
    $this -> db -> bind('demo', $data['demo']);
    $this -> db -> bind('source', $data['source']);
    $this -> db -> bind('deskripsi', $data['deskripsi']);
    $this -> db -> bind('kategori', $data['kategori']);
    $this -> db -> bind('images', $pathfile);
    $this -> db -> bind('atr', $data['author']);
    $this -> db -> bind('id', $data['id']);
    $this -> db -> bind('date', now());
    
    return $this -> db -> rowCount() > 0 ? true : false;
  }
}