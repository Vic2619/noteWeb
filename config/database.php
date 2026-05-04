<?php
declare(strict_types=1);

$dbHost = 'db';      
$dbName = 'noteweb';
$dbUser = 'root';
$dbPass = 'root'; 

try {
    $pdo = new PDO(
        "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4",
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
