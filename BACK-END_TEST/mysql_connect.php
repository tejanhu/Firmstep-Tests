<?php

// PDO
$pdo = new PDO('mysql:host=127.0.0.1;dbname=reception', 'root', '');
$statement = $pdo->query("SELECT * FROM queue");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo json_encode(print_r($pdo->query($statement)));
 http_response_code(200);

?>