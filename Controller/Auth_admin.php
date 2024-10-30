<?php
session_start();

if (!isset($_SESSION['bid'])) {
   header("location: ../index.php");
   exit;
} else {
   $bid = $_SESSION['bid'];
}

?>