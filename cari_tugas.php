<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keyword = $_POST['keyword'];

    $query = "SELECT * FROM Tugas 
              WHERE nama_tugas LIKE '%$keyword%' 
                 OR deskripsi LIKE '%$keyword%' 
                 OR status LIKE '%$keyword%' 
                 OR deadline LIKE '%$keyword%'";

    $result = mysqli_query($kon, $query);
} else {
    $query = "SELECT * FROM Tugas";
    $result = mysqli_query($kon, $query);
}
?>

<h1>.:: Cari Tugas ::.</h1>

<form action="" method="post">
    <label for="keyword">Keyword:</label>
    <input type="text" name="keyword" required>
    <button type="submit">Cari</button>
</form>

<?php
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama Tugas</th><th>Deskripsi</th><th>Status</th><th>Deadline</th><th>Action</th></tr>";

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
