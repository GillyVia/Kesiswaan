<?php
// include database connection file
include 'koneksi.php';
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$total_point=$_POST['total_point'];
$result = mysqli_query($koneksi, "UPDATE point SET nama='$nama',jurusan='$jurusan',total_point='$total_point' WHERE nis='$nis'");
// Redirect to homepage to display updated user in list
header("Location: poinStaf.php");
?>
