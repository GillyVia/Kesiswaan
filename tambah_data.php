<?php
include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jk'];


// Validasi file gambar (foto)
$foto = $_FILES['foto']['name'];
$ukuran_foto = $_FILES['foto']['size'];
$tmp_foto = $_FILES['foto']['tmp_name'];
$ekstensi_foto_diperbolehkan = array('jpg', 'jpeg', 'png');
$x_foto = explode('.', $foto);
$ekstensi_foto = strtolower(end($x_foto));
$path_foto = "uploads/" . $foto;



// Validasi ekstensi dan ukuran file
if (in_array($ekstensi_foto, $ekstensi_foto_diperbolehkan) && $ukuran_foto <= 2000000) {
    
        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($tmp_foto, $path_foto))
            // Simpan data ke database
            $query = "INSERT INTO data_siswa (nis, nama, jurusan, jk, foto) VALUES ('$nis', '$nama', '$jurusan', '$jk', '$foto')";

            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Data berhasil ditambahkan!'); window.location='dataaStaf.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data ke database!'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('File gambar tidak valid atau ukurannya terlalu besar!'); window.history.back();</script>";
    }

?>