<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "management_tugas";

$kon = mysqli_connect($servername, $username, $password);
if (!$kon) 
    die("Gagal Koneksi...");

$hasil = mysqli_select_db($kon, $dbname);

if (!$hasil) {
    $hasil = mysqli_query($kon, "CREATE DATABASE $dbname");
    if (!$hasil) 
        die("Gagal Buat Database");
     else 
        $hasil = mysqli_select_db($kon, $dbname);
        if (!$hasil) die("Gagal Konek Database");
}

$sqlTabelTugas = "CREATE TABLE if not exists Tugas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_tugas VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    status ENUM('selesai', 'dalam proses', 'belum dikerjakan', 'tidak di kerjakan') NOT NULL,
    deadline DATE)";

mysqli_query($kon, $sqlTabelTugas) or die("Gagal Buat Tabel Tugas");

echo "Tabel Tugas Siap <hr/>" ;
?>
