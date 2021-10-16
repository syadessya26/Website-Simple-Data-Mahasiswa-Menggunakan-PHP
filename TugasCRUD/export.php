<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table Mahasiswa berdasarkan nim secara Descending
$siswa = query("SELECT * FROM mahasiswa ORDER BY nim DESC");

// Membuat nama file
$filename = "data mahasiswa fti-" . date('Ymd') . ".xls";

// export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Semester</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($siswa as $row) : ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['kelas']; ?></td>
            <td><?= $row['jurusan']; ?></td>
            <td><?= $row['semester']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>