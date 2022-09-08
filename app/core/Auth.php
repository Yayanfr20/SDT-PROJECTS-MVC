<?php
class Auth {
  private $user = null;
  public function __construct ($session) {
    $this->user = $session["username"] ?? null;
  }
  public function check () {
    return !empty($this->user) ? true : false;
  }
}