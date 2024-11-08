<?php
session_start();

if (! isset($_SESSION['uid'])) {
  header("location: /");
  exit;
} else {
  $uid = $_SESSION['uid'];
}

?>