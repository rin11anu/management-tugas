<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM Tugas WHERE id=$id";
$result = mysqli_query($kon, $query);

if ($result) {
    echo "Data berhasil dihapus";
} else {
    echo "Gagal menghapus data";
}

mysqli_close($kon);
?>

<hr/>
<a href="tampil_tugas.php">DAFTAR TUGAS</a>
