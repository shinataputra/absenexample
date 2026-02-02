<?php
$host = "shared_postgres";   // nama container postgres
$db = "db_absen";
$user = "admin";
$pass = "admin123";

try {
    $pdo = new PDO(
        "pgsql:host=$host;dbname=$db",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}
