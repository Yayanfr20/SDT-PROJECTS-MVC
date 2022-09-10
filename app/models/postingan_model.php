<?php
class postinga_model{
  private $tabel = TB_POSTING;
  private db;
  public function __constructor(){
    $this -> db = new Database;
  }
}