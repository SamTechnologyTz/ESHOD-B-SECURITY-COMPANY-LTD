<?php
$unga = new mysqli('localhost', 'root', '', 'eshod');

if (!$unga) {
  die('connection fail '. mysqli_error());
}
?>
