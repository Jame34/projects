<?php
$host = getenv('DB_HOST') ?: '127.0.0.1'; // Database host
$port = getenv('DB_PORT') ?: '3306'; // Database port
$db   = getenv('DB_NAME') ?: 'knowledge_grap'; // Database name
$user = getenv('DB_USER') ?: 'root'; // Database user
$pass = getenv('DB_PASSWORD') ?: ''; // Database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "資料庫連接成功！";
} catch (\PDOException $e) {
    die("資料庫連接失敗：" . $e->getMessage());
}

