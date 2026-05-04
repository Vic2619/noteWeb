<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    $pdo = new PDO(
        "pgsql:host=dpg-d7sdusjrjlhs73ap05j0-a.singapore-postgres.render.com;port=5432;dbname=noteweb_db_g7ze",
        "noteweb_db_g7ze_user",
        "45HcDc9x5VRreCazl1H4RHmhmeC399Lr"
    );

    echo "OK CONNECT";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
