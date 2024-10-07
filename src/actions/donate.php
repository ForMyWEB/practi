<?php
// session_start();
require_once __DIR__ . '/../helpers.php';

$campaign_name = $_POST['campaign_name'] ?? null;
$sum = $_POST['sum'] ?? null;
$altsum = $_POST['altsum'] ?? null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;

if (!$sum && !$altsum) {
    die('Будь ласка, виберіть суму або введіть власну.');
}

if ($sum && $altsum) {
    die('Будь ласка, заповніть тільки одне поле суми.');
}

$pdo = getPDO();

$query = "INSERT INTO donatesphero (sum, altsum, name, email, date) VALUES (:sum, :altsum, :name, :email, :date)";
$params = [
    'sum' => $sum ?: null,
    'altsum'=> $altsum ?: null,
    'name' => $name,
    'email' => $email,
    'date' => date('Y-m-d H:i:s')
];
$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (Exception $e) {
    die($e->getMessage());
}

$pdo = getPDO();

$query = "INSERT INTO overalldonate (campaign_name, sum, altsum, name, email, date) VALUES (:campaign_name, :sum, :altsum, :name, :email, :date)";
$params = [
    'campaign_name' => $campaign_name,
    'sum' => $sum ?: null,
    'altsum'=> $altsum ?: null,
    'name' => $name,
    'email' => $email,
    'date' => date('Y-m-d H:i:s')
];
$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (Exception $e) {
    die($e->getMessage());
}
?>
