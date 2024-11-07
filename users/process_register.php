<?php
header(); 
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $data = json_decode(file_get_contents('php/input'), true);
   
   if (json_last_error() === JSON_ERROR_NONE) {}
}
?>