<?php
// include database connection file
include 'koneksi.php';
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$absen=$_POST['absen'];
$result = mysqli_query($koneksi, "UPDATE absen SET nama='$nama',jurusan='$jurusan',absen='$absen' WHERE nis='$nis'");
// Redirect to homepage to display updated user in list
header("Location: absenStaf.php");
?>
