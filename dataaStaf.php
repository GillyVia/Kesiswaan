<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styledata.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-MYSkanema"></span><span>My Skanema</span></h2>

        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="profilStaf.php"><span class="las la-user"></span>
                        <span>Profil</span></a>
                </li>
                <li>
                    <a href="dahsboardStaf.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="absenStaf.php"><span class="las la-users"></span>
                        <span>Absen Siswa</span></a>
                </li>
                <li>
                    <a href="poinStaf.php"><span class="las la-clipboard-list"></span>
                        <span>Point Siswa</span></a>
                </li>
                <li>
                    <a href="dataaStaf.php" class="active"><span class="las la-clipboard"></span>
                        <span>Data Siswa</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h3>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Data Siswa
            </h3>
            <a href="dahsboardStaf.php"><button>Back<span class="las la-arrow-right"></a>
            </span></button>
        </header>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-graduate me-2"></i> Daftar Absen Siswa</h3>
            <hr>
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
                <i class="fas fa-plus-circle me-2"></i>TAMBAH ABSEN SISWA
            </button>
            <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Tambah Absen Siswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="tambah_data.php" method="POST" enctype="multipart/form-data">

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="text" class="form-control" id="nis" name="nis" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jk" name="jk" required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NIS</th>
                        <th scope="col">NAMA SISWA</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">KELAMIN</th>
                        <th scope="col">Foto</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT * FROM data_siswa");
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nis']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['jurusan']; ?></td>
                        <td><?= $data['jk']; ?></td>
                        <td><img src="uploads/<?= $data['foto']; ?>" alt="Foto" width="100"></td>
                        <td>
                            <button class="btn btn-success btn-sm me-1 edit-button" data-bs-toggle="modal"
                                data-bs-target="#editDataModal" data-nis="<?= $data['nis']; ?>"
                                data-nama="<?= $data['nama']; ?>" data-jurusan="<?= $data['jurusan']; ?>"
                                data-total_point="<?= $data['jk']; ?>" data-foto="<?= $data['foto']; ?>">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <a href="hapus_data.php?nis=<?php echo $data['nis']; ?>" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                        <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editDataLabel">Edit Data Siswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="ubah_data.php" method="POST" enctype="multipart/form-data">

                                            <input type="hidden" id="edit-nis" name="nis">
                                            <div class="mb-3">
                                                <label for="edit-nama" class="form-label">Nama Siswa</label>
                                                <input type="text" class="form-control" id="edit-nama" name="nama" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit-jurusan" class="form-label">Jurusan</label>
                                                <input type="text" class="form-control" id="edit-jurusan" name="jurusan"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editJk" class="form-label">Jenis Kelamin</label>
                                                <select class="form-select" id="editJk" name="jk" required>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editFotoPreview" class="form-label">Foto Saat Ini</label>
                                                <img id="editFotoPreview" src="" alt="Foto" width="150"
                                                    class="mb-3 border rounded">
                                                <label for="editFoto" class="form-label">Ganti Foto</label>
                                                <input type="file" class="form-control" id="editFoto" name="foto">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <?php
                }
                ?>
                <script>
                    document.querySelectorAll('.btn-edit').forEach(button => {
                        button.addEventListener('click', function () {
                            // Isi data ke modal
                            document.getElementById('edit-nis').value = this.dataset.nis;
                            document.getElementById('edit-nama').value = this.dataset.nama;
                            document.getElementById('edit-jurusan').value = this.dataset.jurusan;
                            document.getElementById('editJk').value = this.dataset.jk;


                            // Preview Foto
                            const fotoPath = this.dataset.foto ? 'uploads/' + this.dataset.foto : '';
                            const fotoPreview = document.getElementById('editFotoPreview');
                            fotoPreview.src = fotoPath;
                            fotoPreview.style.display = fotoPath ? 'block' : 'none';



                            // Tampilkan Modal
                            new bootstrap.Modal(document.getElementById('editModal')).show();
                        });
                    });
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>