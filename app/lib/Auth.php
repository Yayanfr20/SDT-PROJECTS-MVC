<?php
class Auth {
  private $id, $data;
  public function __construct($id, $data) {
    $this->id = $id;
    $this->data = $data;
  }
  
  public function check() {
    if (isset($_SESSION['ryuxd'])) {
       if (MetaHack::decHack($_SESSION['ryuxd']['id']) != $this->id) {
          header("Location:".BASEURL."/Login");
          exit;
       }
    } else {
       header("Location:".BASEURL."/Login");
       exit;
    }
  }
  
  public function user() {
    return $this->data;
  }
  
  public function logout() {
    unset($_SESSION['ryuxd']);
    session_destroy();
    header("Location:" . BASEURL .'/Login');
    exit;
  }
}