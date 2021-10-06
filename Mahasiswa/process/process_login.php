<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

// Menangkap request
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

// Mengecek pengguna
if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);
    
    // Membuat session
    session_start();
    $_SESSION['id'] = $row['id'];
    header("location: " . BASE_URL. 'dashboard.php');
} else {
    header("location: " . BASE_URL);
}
