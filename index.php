<?php
require "db.php";

$data = $pdo->query(
    "SELECT uid, waktu 
     FROM absen 
     ORDER BY waktu DESC 
     LIMIT 50"
)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Absensi RFID</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 400px; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #eee; }
    </style>
</head>
<body>

<h2>📋 Data Absensi RFID</h2>

<table>
<tr>
    <th>UID</th>
    <th>Waktu</th>
</tr>

<?php foreach ($data as $row): ?>
<tr>
    <td><?= htmlspecialchars($row['uid']) ?></td>
    <td><?= $row['waktu'] ?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
