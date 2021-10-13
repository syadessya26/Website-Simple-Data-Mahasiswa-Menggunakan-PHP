<?php

require_once('../function/helper.php');

session_start();

$process = isset($_GET['process']) ? ($_GET['process']) :false;

// memberikan proteksi dashboard
if ($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Utama!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="process_dashboard.php">FTI UNMER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./page/create.php' ?>">Absensi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL . './page/class.php' ?>">E-Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL . './page/forum.php' ?>" tabindex="-1" aria-disabled="true">Forum Diskusi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL . 'index.php' ?>" tabindex="-1" aria-disabled="true">Log out</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    </div>
    </nav>
    <div class="content">
        <div class="container">
            <div class= "sub-content mt-5">
            <h3>Update Data</h3>
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

<form method="POST" action="<?= BASE_URL . '/process/process_update.php' ?>">
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
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>
            </div>
        </div>
    </div>