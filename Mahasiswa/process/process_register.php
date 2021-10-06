<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);


//pengecekan kelengkapan data
if (empty($username) || empty($password)) {
    header("location: " . BASE_URL . "register.php?page=register&process=failed");
} else {
    mysqli_query($koneksi, "INSERT INTO admin(username, password) VALUES ('$username', '$password')");
    header("location: " . BASE_URL . "index.php?index&process=success");
}
