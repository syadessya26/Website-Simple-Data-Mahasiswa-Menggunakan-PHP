<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$id = $_GET['id']; // get id through query string

$del = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id = '$id'"); // delete query

if($del)
{
    mysqli_close($koneksi); // Close connection
    header("location: process_dashboard.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>