<?php

require 'function.php';

$username = $_POST['username'];
$password = md5($_POST['password']);


//pengecekan kelengkapan data
if (empty($username) || empty($password)) {
    header("location: register.php");
} else {
    mysqli_query($koneksi, "INSERT INTO admin(username, password) VALUES ('$username', '$password')");
    header("location: index.php");
}
