<?php
class Global_chat extends Controller
{
  public function index ()
  {
    $this->auth()->check();
    $online_users = $this->model("online_model")->getOnline();
    
    $this->view('Dashboard/layout/header', [
      "judul" => "global chat"
    ]);
    $this->view('Dashboard/Chats/index', [
       "user" => $this->auth()->user(),
       "online_users" => $online_users
    ]);
    $this->view('Dashboard/layout/footer');
  }
  
  public function realtime()
  {
    method("POST", 403);
    $this->auth()->user();
    
    if (!isset($_POST["action"])) abort(400);
    
    $query = $_POST["action"] == "online" ? $this->model("online_model")->setOnline($_POST) : $this->model("online_model")->setOffline($_POST);
    
    echo $query > 0 ? "success" : "failed";
    exit;
    
  }
}