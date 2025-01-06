<?php
include 'koneksi.php';

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $total_point = $_POST['total_point'];

    $input = mysqli_query($koneksi, "INSERT INTO point (nis, nama, jurusan, total_point) VALUES ('$nis', '$nama', '$jurusan', '$total_point')") or die(mysqli_error($koneksi));

if ($input) {
    echo "<script>
        alert('Data Berhasil Disimpan');
        window.location.href = 'poinStaf.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal Menyimpan Data');
        window.location.href = 'poinStaf.php';
    </script>";
}
?>