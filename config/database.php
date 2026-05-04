<?php
declare(strict_types=1);

$dbHost = 'dpg-d7sdusjrjlhs73ap05j0-a';
$dbPort = '5432';    
$dbName = 'noteweb_db_g7ze';
$dbUser = 'noteweb_db_g7ze_user';
$dbPass = '45HcDc9x5VRreCazl1H4RHmhmeC399Lr'; 

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
