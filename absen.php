<?php
require "db.php";

if (!isset($_GET['uid'])) {
    http_response_code(400);
    echo "UID kosong";
    exit;
}

$uid = trim($_GET['uid']);

// validasi sederhana
if (strlen($uid) < 4) {
    echo "UID tidak valid";
    exit;
}

$stmt = $pdo->prepare("INSERT INTO absen (uid) VALUES (:uid)");
$stmt->execute(['uid' => $uid]);

echo "OK";
