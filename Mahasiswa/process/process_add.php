<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];

//pengecekan kelengkapan data
if (empty($nama) || empty($nim) || empty($kelas) || empty($jurusan) || empty($semester)) {
    header("location: " . BASE_URL . "dashboard.php?page=create&process=failed");
} else {
    mysqli_query($koneksi, "INSERT INTO mahasiswa(nama, nim, kelas, jurusan, semester) VALUES ('$nama', '$nim', '$kelas', '$jurusan', '$semester')");
    header("location: " . BASE_URL . "dashboard.php?page=home&process=success");
}