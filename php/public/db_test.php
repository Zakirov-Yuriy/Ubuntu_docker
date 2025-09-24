<?php
$host = 'db';
$db   = getenv('POSTGRES_DB') ?: 'appdb';
$user = getenv('POSTGRES_USER') ?: 'appuser';
$pass = getenv('POSTGRES_PASSWORD') ?: 'supersecretpassword';
$dsn  = "pgsql:host=$host;port=5432;dbname=$db;";

try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "<h2>Подключение к БД успешно 🎉</h2>";
    $stmt = $pdo->query('SELECT version()');
    echo "<pre>PostgreSQL: " . htmlspecialchars($stmt->fetchColumn()) . "</pre>";
} catch (PDOException $e) {
    http_response_code(500);
    echo "<h2>Ошибка подключения к БД</h2>";
    echo "<pre>" . htmlspecialchars($e->getMessage()) . "</pre>";
}
