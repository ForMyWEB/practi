<?php
// session_start();
require_once __DIR__ . '/../helpers.php';

$name = $_POST['name'] ?? null;
$surname = $_POST['surname'] ?? null;
$login = $_POST['login'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

$_SESSION['validation'] = [];

if (empty($name)) {
    $_SESSION['validation']['name'] = 'Введіть ім\'я';
}

if (!empty($_SESSION['validation'])) {
    redirect('/../htdocs/pages/register.php');
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$pdo = getPDO();

$query = "INSERT INTO register (Name, Surname, Login, Email, Password, Date) VALUES (:Name, :Surname, :Login, :Email, :Password, :Date)";
$params = [
    'Name' => $name,
    'Surname' => $surname,
    'Login' => $login,
    'Email' => $email,
    'Password' => $hashedPassword,
    'Date' => date('Y-m-d H:i:s')
];
$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (Exception $e) {
    die($e->getMessage());
}

redirect('/../htdocs/pages/login.php');
?>
