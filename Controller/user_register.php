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
   
   $jina = mysql_real_escape_string($unga, hakiki($data));
  
   $stmt = $unga->prepare("SELECT * FROM `users` WHERE jina = ? ");
   $stmt->bind_param('s', $jina);
   $stmt->execute();
   $jina_result = $stmt->get_result();

   if ()
}