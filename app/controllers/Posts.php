<?php
class Posts extends Controller {
   public function index($param1=null,$param2=null) {
      $this->auth()->check();
      switch($param2){
        case 'edit':
          $this -> edit($param1);
          break;
        case 'update':
          $this -> update($param1);
          break;
        default:
          echo "<h1>POSTING</h1>";
      }
   }
   public function edit($param=null){
     echo "<h1>EDIT</h1><p>parameter 1 : {$param}";
   }
   public function update($param=null){
     echo "<h1>UPDATE</hh1<p>parameter 1 : {$param}";
   }
}