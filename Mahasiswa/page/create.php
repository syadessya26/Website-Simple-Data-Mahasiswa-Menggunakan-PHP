<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php 
if ($process == 'failed') :
?>

</div>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Harap isi semua data dengan lengkap!
  </div>
</div>
<?php endif; ?>

<form method="POST" action="<?= BASE_URL . '/process/process_add.php' ?>">
<form>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name= "nama">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="number" class="form-control" id="nim" name="nim">
  </div>
  <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas">
  </div>
  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan">
  </div>
  <div class="mb-3">
    <label for="semester" class="form-label">Semester</label>
    <input type="number" class="form-control" id="semester" name="semester">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>