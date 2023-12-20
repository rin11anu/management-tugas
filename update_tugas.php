<?php
include 'koneksi.php';

$id = $_POST['id'];
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
    $updateQuery = "UPDATE Tugas SET 
                    nama_tugas='$nama_tugas', 
                    deskripsi='$deskripsi', 
                    status='$status', 
                    deadline='$deadline' 
                    WHERE id=$id";

    $result = mysqli_query($kon, $updateQuery);

    if ($result) {
        echo "Update data berhasil";
    } else {
        echo "Gagal update data: " . mysqli_error($kon);
    }
}

mysqli_close($kon);
?>

<hr/>
<a href="tampil_tugas.php">DAFTAR TUGAS</a>
