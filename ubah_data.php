<?php
include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jk'];

// Upload foto jika ada file baru
if (isset($_FILES['foto']['name']) && !empty($_FILES['foto']['name'])) {
    $fotoBaru = time() . "_" . basename($_FILES['foto']['name']);
    $targetFoto = "uploads/" . $fotoBaru;
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFoto)) {
        $foto = $fotoBaru;
        // Hapus foto lama
        $queryFotoLama = mysqli_query($koneksi, "SELECT foto FROM data_siswa WHERE nis = '$nis'");
        $fotoLama = mysqli_fetch_assoc($queryFotoLama)['foto'];
        if (!empty($fotoLama) && file_exists("uploads/" . $fotoLama)) {
            unlink("uploads/" . $fotoLama);
        }
    } else {
        echo "Gagal mengunggah foto.";
        exit();
    }
} else {
    // Ambil foto lama
    $queryFoto = mysqli_query($koneksi, "SELECT foto FROM data_siswa WHERE nis = '$nis'");
    $foto = mysqli_fetch_assoc($queryFoto)['foto'];
}

// Update data ke database
$queryUpdate = "UPDATE data_siswa SET
    nama = '$nama',
    jk = '$jk',
    jurusan = '$jurusan',
    foto = '$foto'
WHERE nis = '$nis'";

if (mysqli_query($koneksi, $queryUpdate)) {
    header("Location: dataaStaf.php?status=success");
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}
?>
