<?php

include 'koneksi.php';
$nis = $_GET['nis'];
$result = mysqli_query($koneksi, "DELETE FROM point WHERE nis='$nis'");
header("Location:poinStaf.php");
?>