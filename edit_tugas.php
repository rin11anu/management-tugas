<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM Tugas WHERE id=$id";
$result = mysqli_query($kon, $query);
$data = mysqli_fetch_assoc($result);

mysqli_close($kon);
?>

<h1>.:: Edit Tugas ::.</h1>
<form action="update_tugas.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label for="nama_tugas">Nama Tugas:</label>
    <input type="text" name="nama_tugas" value="<?php echo $data['nama_tugas']; ?>" required>

    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>

    <label for="status">Status:</label>
    <select name="status">
        <option value="selesai" <?php echo ($data['status'] == 'selesai') ? 'selected' : ''; ?>>Selesai</option>
        <option value="proses" <?php echo ($data['status'] == 'proses') ? 'selected' : ''; ?>>Proses</option>
    </select>

    <label for="deadline">Deadline:</label>
    <input type="date" name="deadline" value="<?php echo $data['deadline']; ?>" required>

    <button type="submit">Update</button>
</form>
<hr/>
<a href="tampil_tugas.php">DAFTAR TUGAS</a>
