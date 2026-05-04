<?php
declare(strict_types=1);

$dbHost = getenv('DB_HOST') ?: 'noteweb_db';
$dbPort = getenv('DB_PORT') ?: '5432';    
$dbName = getenv('DB_NAME') ?: 'noteweb_db_g7ze';
$dbUser = getenv('DB_USER') ?: 'noteweb_db_g7ze_user';
$dbPass = getenv('DB_PASS') ?: '45HcDc9x5VRreCazl1H4RHmhmeC399Lr';

try {
    $pdo = new PDO(
        "pgsql:host={$dbHost};port={$dbPort};dbname={$dbName};charset=utf8mb4",
        $dbUser,
        $dbPass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => false, 'message' => 'Không thể kết nối cơ sở dữ liệu', 'error' => $e->getMessage()
    ]);
    exit;
}
