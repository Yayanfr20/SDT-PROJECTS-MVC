<?php
error_reporting(E_ALL^E_WARNING);
ob_start();
if (!session_id()) session_start();
require_once '../app/init.php';

$app = new App;
ob_end_flush();
