<?php
include "koneksi.php"; // Asumsikan koneksi ke database sudah terdefinisi

$nis = $_GET['nis']; // Ambil nilai NIS dari parameter GET

$query = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE nis = '$nis'");
$data = mysqli_fetch_assoc($query);

// Hapus file foto jika ada
unlink("uploads/" . $data['foto']);



// Hapus data dari database
mysqli_query($koneksi, "DELETE FROM data_siswa WHERE nis = '$nis'");

// Tampilkan pesan sukses dan arahkan ke halaman index.php
echo "<script>alert('Data berhasil dihapus!'); window.location='dataaStaf.php';</script>";
?>