<?php
include 'koneksi.php';

$nama_tugas = $_POST['nama_tugas'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];
$deadline = $_POST['deadline'];

$dataValid = "YA";

if (strlen(trim($nama_tugas)) == 0) {
    echo "Nama Tugas Harus Diisi! <br />";
    $dataValid = "TIDAK";
}
if (strlen(trim($deskripsi)) == 0) {
    echo "Deskripsi Harus Diisi! <br />";
    $dataValid = "TIDAK";
}
if (strlen(trim($status)) == 0) {
    echo "Status Harus Diisi! <br />";
    $dataValid = "TIDAK";
}
if (strlen(trim($deadline)) == 0) {
    echo "Deadline Harus Diisi! <br />";
    $dataValid = "TIDAK";
}

if ($dataValid == "TIDAK") {
    echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
    echo "<input type='button' value='Kembali' onclick='self.history.back()'>";
    exit;
} else {

    $insertQuery = "INSERT INTO Tugas 
    (nama_tugas, deskripsi, status, deadline) 
    VALUES 
    ('$nama_tugas', '$deskripsi', '$status', '$deadline')";
    $result = mysqli_query($kon, $insertQuery);

    if ($result) {
        echo "Simpan data berhasil";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($kon);
    }
}

mysqli_close($kon);
?>

<hr/>
<a href="tampil_tugas.php">DAFTAR TUGAS</a>
