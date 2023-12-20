<?php
include 'koneksi.php';

$query = "SELECT * FROM Tugas";
$result = mysqli_query($kon, $query);

echo "<h1>.:: Daftar Tugas ::.</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama Tugas</th><th>Deskripsi</th><th>Status</th><th>Due Date</th><th>Action</th></tr>";

while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['nama_tugas']."</td>";
    echo "<td>".$data['deskripsi']."</td>";
    echo "<td>".$data['status']."</td>";
    echo "<td>".$data['deadline']."</td>";
    echo "<td>
            <a href='edit_tugas.php?id=".$data['id']."'>Edit</a> | 
            <a href='hapus_tugas.php?id=".$data['id']."'>Hapus</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($kon);
?>
