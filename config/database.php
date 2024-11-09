<?php
$unga = new mysqli('localhost', 'root', '', 'eshod');

if (!$unga) {
  die(json_encode('message' => 'no database connection'));
}
?>
