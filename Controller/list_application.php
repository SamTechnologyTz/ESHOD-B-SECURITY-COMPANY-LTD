<?php
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
  $stmt = $unga->prepare("SELECT * FROM `applications`");
  $stmt->execute();
  $reslt = $stmt->get_result();

  if ($reslt) {
    $applications = $reslt->fetch_all(MYSQLI_ASSOC);

    foreach($application as $application) {
      $name = $application['jina'];
    }
  }
  http_response_code(200);
  echo json_encode(['message' => $name ]);
}

?>
