<h1>.:: Tambah Tugas ::.</h1>
    <form action="simpan_tugas.php" method="post">
    <table>
    <tr>
        <td><label for="nama_tugas">Nama Tugas:</label></td>
        <td><input type="text" name="nama_tugas" required></td>
    </tr><tr>
        <td><label for="deskripsi">Deskripsi:</label></td>
        <td><textarea name="deskripsi"></textarea></td>
    </tr><tr>
        <td><label for="status">Status:</label></td>
        <td><select name="status">
            <option value="selesai">Selesai</option>
            <option value="proses">Proses</option>
            <option value="terlambat">Terlambat</option>
            <option value="belom di kerjakan">Belom di kerjakan</option>
            <option value="tidak mengerjakan">Tidak Mengerjakan </option>
        </select>
</td>
    </tr>
    <tr>
        <td><label for="deadline">Deadline:</label></td>
        <td><input type="date" name="deadline" required></td>
    </tr><tr>
        <td colspan="2">
        <button type="submit">Simpan</button>
    </td>
</tr>
    </form>
<hr/>
<a href="tampil_tugas.php">DAFTAR TUGAS</a>  ||  <a href="cari_tugas.php">CARI TUGAS</a><br>

