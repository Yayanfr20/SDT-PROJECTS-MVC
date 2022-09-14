<?php
class Posts extends Controller {
   public function index() {
      $this->auth()->check();
      
   }
}