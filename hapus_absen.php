<?php

include 'koneksi.php';
$nis = $_GET['nis'];
$result = mysqli_query($koneksi, "DELETE FROM absen WHERE nis='$nis'");
header("Location:absenStaf.php");
?>