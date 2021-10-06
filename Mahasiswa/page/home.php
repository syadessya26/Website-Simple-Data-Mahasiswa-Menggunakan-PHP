<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>

<?php 
if ($process == 'failed') :
?>

<div class="alert alert-success" role="alert">
  <div>
    Data berhasil dimasukan!
  </div>
<?php endif; ?>

<?php

$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Semester</th>
    </tr>
  </thead>
  <tbody>
      <?php $no = 1; ?>
      <?php foreach($mahasiswa as $m): ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $m['nama'] ?></td>
      <td><?= $m['nim'] ?></td>
      <td><?= $m['kelas'] ?></td>
      <td><?= $m['jurusan'] ?></td>
      <td><?= $m['semester'] ?></td>
      <td>
          <a class="btn btn-danger badge">Delete</a>
          <a class="btn btn-info badge">Edit</a>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>