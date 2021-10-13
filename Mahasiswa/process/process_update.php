<?php
require_once('../function/koneksi.php');
require_once('../function/helper.php');

if(isset($_GET['id'])){
    $id    =$_GET['id'];
}
else {
    echo "<script>alert('Data yang telat di update ^^');window.location='process_dashboard.php'</script>"; 
}

$id         = $_POST['id'];
$nama           = $_POST['nama'];
$nim            = $_POST['nim'];
$kelas      = $_POST['kelas'];
$semester    = $_POST['semester'];
$jurusan       = $_POST['jurusan'];
$semester    = $_POST['semester'];
 
// query SQL untuk insert data ke dalam Mysql
$query="UPDATE mahasiswa SET nama='$nama',nim='$nim,kelas='$kelas', jurusan='$jurusan', semester='$jurusan' WHERE id='$id'";
if($query)
{
    mysqli_close($koneksi); // Close connection 
    echo "<script>alert('Data yang telat di update ^^');window.location='process_dashboard.php'</script>";
    exit;	
}
else
{
    echo "Error updating record"; // display error message if not delete
}
?>