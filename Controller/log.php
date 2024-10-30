<?php
session_start();
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
   $pasa = hakiki($_POST['pass']); 
   $password = hakiki($_POST['password']);
  
   $stmt = $unga->prepare("SELECT * FROM `users` WHERE email = ? OR namba = ? ");
   $stmt->bind_param('si', $pass, $pass);
   $stmt->execute();
   $reslt = $stmt->get_result();

   if ($reslt->num_rows === 0) {
      $mtu = $reslt->fetch_all(MYSQLI_ASSOC);
      if (password_verify($password, $mtu['password'])) {
          // header("location: ../home.php");
          // exit;
          echo json_encode(['message' => 'log in successfull']);
      } else {
          echo json_encode(['message' => 'Invalid password, you will be blocked if you incorrect password 5times']);
          $user_ip = $_SERVER['REMOTE_ADDR'];
          $user_status = "wraning";
          $stmt = $unga->prepare("INSERT INTO `blocks` (onyo, ip) VALUE (?,?) ");
          $stmt->bind_param('si', $user_status, $user_ip);
          $stmt->execute();
      }
   } else {
       echo json_encode(['message' => 'Invalid emal or number']);
   }
} else {
   echo json_encode(['message' => 'Only POST Method allowed']);
}
?>