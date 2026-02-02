<?php
$conn = new mysqli("db","absen","absen123","db_absen");

$uid = $_GET['uid'] ?? '';

if ($uid != '') {
    $stmt = $conn->prepare(
        "INSERT INTO absen (uid, waktu) VALUES (?, NOW())"
    );
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    echo "OK";
} else {
    echo "NO UID";
}
