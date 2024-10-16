<?php
$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$password = $data['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    echo json_encode(['message' => 'Login successful']);
} else {
    echo json_encode(['message' => 'Invalid credentials']);
}
?>