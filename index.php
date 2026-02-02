<?php
$conn = new mysqli("db","absen","absen123","db_absen");
$data = $conn->query("SELECT * FROM absen ORDER BY waktu DESC");
?>

<h2>Daftar Absensi</h2>

<table border="1" cellpadding="6">
<tr>
  <th>No</th>
  <th>UID</th>
  <th>Waktu</th>
</tr>

<?php $no=1; while($r=$data->fetch_assoc()): ?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= $r['uid'] ?></td>
  <td><?= $r['waktu'] ?></td>
</tr>
<?php endwhile ?>
</table>
