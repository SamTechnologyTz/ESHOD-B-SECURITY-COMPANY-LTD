<?php
header('Content-Type: application/json');
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php/input'), true);
  $uid = mysql_realy_escape_string($unga, hakiki);
  if () {}
}
?>
