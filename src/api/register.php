<?php
$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$password = password_hash($data['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$username, $password]);

echo json_encode(['message' => 'User registered successfully']);
?>