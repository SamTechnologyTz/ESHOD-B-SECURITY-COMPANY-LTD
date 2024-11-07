<?php
header('Content-Type: application/json');
require '../config/database.php';
if ($_SERVER['REQUEST_METHODE'] === 'POST') {
  $data = json_decode(file_get_contents('php/input'), true);

  if (json_last_error() === JSON_ERROR_NONE) {
    echo json_encode(['message' => 'Error incorrect formart']);
    exit;
  }

  $pepe = mysql_real_escape_string($unga, );
  if ()
}
?>
