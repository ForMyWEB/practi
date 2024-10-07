<?php
// session_start();
require_once __DIR__ . '/../helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || empty($password)) {
    die('Email і пароль обов\'язкові');
}

$pdo = getPDO();
$query = "SELECT * FROM register WHERE email = :email";
$stmt = $pdo->prepare($query);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    setMessage('error', "Користувач $email не знайдений");
    redirect('/../htdocs/pages/login.php');
}

if (!password_verify($password, $user['Password'])) {
    setMessage('error', "Неправильний пароль");
    redirect('/../htdocs/pages/login.php');
}

$_SESSION['user'] = [
    'id' => $user['id'],
    'login' => $user['login'],
    'email' => $user['email'],
    'name' => $user['name']
];

redirect('/../htdocs/pages/user.php');
?>
