<?php
// session_start();
require_once __DIR__ . '/../helpers.php';

$info = [];

try {
    $db = getPDO();
    $query = $db->query("SELECT * FROM campain");
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

?>
