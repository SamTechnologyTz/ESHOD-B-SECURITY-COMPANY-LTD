<?php
header('Content-Type: application/json');
require '../config/database.php';
require 'chujio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taarifa = json_decode(file_get_contents('php://input'), true);
    $safisha = new Hikisha($taarifa['uid']);
    $uid = mysqli_real_escape_string($unga, $safisha->hakiki());
}
?>
