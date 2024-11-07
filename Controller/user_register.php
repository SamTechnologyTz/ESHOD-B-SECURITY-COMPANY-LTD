<?php
header('Content-Type: application/json');
require '../config/database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   header("Original-Server: " . $_SERVER['SERVER_NAME']);
   $request_ip = $SERVER['SERVER_ADDR'];
   $data = json_decode(file_get_contents('php/input'), true);
   
   if (json_last_error() === JSON_ERROR_NONE) {
      echo json_encode(['message' = 'Incorrect json format']);
      exit;
   }

   function hakiki($data) {
      $data = trim($data);
      $data = stripslahes($data);
      $data	= htmlspacialchars($data);
      return $data;
   }
   
   $jina = mysql_real_escape_string($unga, hakiki($data['name']));
   $pepe = mysql_real_escape_string($unga, hakiki($data['email']));
   $msimbo = mysql_real_escape_string($unga, password_hash($data['msimbo']));
  
   $stmt = $unga->prepare("SELECT * FROM `users` WHERE jina = ? ");
   $stmt->bind_param('s', $jina);
   $stmt->execute();
   $jina_result = $stmt->get_result();

   if ($jina_result === 1) {
      echo json_encode(['message' => 'This username is already taken']);
      exit;
   }

   $stmt = $unga->prepare("SELECT * FROM `users` WHERE pepe = ? ");
   $stmt->bind_param('s', $pepe);
   $stmt->execute();
   $email_result = $stmt->get_result();

   if ($email_result === 1) {
      echo json_encode(['message' => 'This email is already taken']);
      exit;
   } else {
      $stmt = $unga->prepare("INSERT INTO `users` WHERE (jina, pepe, msimbo) VALUES (?, ?, ?)");
      $stmt->bind_param('sss', $jina, $pepe, $msimbo);

      if ($stmt->execute()) {
         echo json_encode(['message' => 'Registration success']);
      }
   }
}
?>
