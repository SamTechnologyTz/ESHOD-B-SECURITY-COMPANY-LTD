<?php
header('Content-Type: application/json');
require '../config/database.php';
require 'chujio.php';
if ($_SERVER['REQUEST_METHODE'] === 'POST') {
  $data = json_decode(file_get_contents('php:/input'), true);
  $emal= new Hakikisha($data['email']);
  $pass = new Hakikisha($data['password']);
  
  if (json_last_error() === JSON_ERROR_NONE) {
    echo json_encode(['message' => 'Error incorrect formart']);
    exit;
  }

  $pepe = mysqli_real_escape_string($unga, $emal->hakiki());
  $msimbo = mysqli_real_escape_string($unga, $pass->hakiki());
}
?>
