<?php
include 'koneksi.php';

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $absen = $_POST['absen'];

    $input = mysqli_query($koneksi, "INSERT INTO absen (nis, nama, jurusan, absen) VALUES ('$nis', '$nama', '$jurusan', '$absen')") or die(mysqli_error($koneksi));

if ($input) {
    echo "<script>
        alert('Data Berhasil Disimpan');
        window.location.href = 'absenStaf.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal Menyimpan Data');
        window.location.href = 'absenStaf.php';
    </script>";
}
?>