<?php
session_start();
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
   $pasa = hakiki($_POST['pass']); 
   $password = hakiki($_POST['password']);
  
   $stmt = 
}
?>