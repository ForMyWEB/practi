<?php

session_start();

require_once __DIR__.'/config.php';

function redirect(string $path)
{
    header("Location: $path");
    die();
}

function getPDO(): PDO
{
    try {
        return new PDO(
            'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,
            DB_USERNAME,
            DB_PASSWORD
        );
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function setMessage(string $key, string $message): void
{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key): bool
{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key): string
{
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function findUser(string $email): array|bool
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM register WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function currentUser(): array|false
{
    if (!isset($_SESSION['user']['id'])) {
        return false;
    }

    $pdo = getPDO();
    $userId = $_SESSION['user']['id'];

    $stmt = $pdo->prepare("SELECT * FROM register WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

