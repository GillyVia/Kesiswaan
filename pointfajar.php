<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Siswa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        <link rel="stylesheet" href="pointsiswa.css">
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
                    <a href="dashboardfajar.php"><span class="las la-igloo"></span> 
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="absensiswab.php"><span class="las la-users"></span> 
                        <span>Absen</span></a>
                </li>
                <li>
                    <a href="pointfajar.php" class="active"><span class="las la-clipboard-list"></span> 
                        <span>Point</span></a>
                </li>
                <li>
                    <a href="panduanpointsiswa.html"><span class="las la-clipboard"></span> 
                        <span>Panduan Point</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                    Point
                </h2>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here" />
                </div>
                <div class="user-wrapper">
                    <a href="profilesiswaaaaaaaa.html"><img src="fajar.jpg" width="40px" height="40px" alt=""></a>
                    <div>
                        <h4>Arwan</h4>
                        <small>Siswa</small>
                    </div>
                </div>
                <a href="logout.php"><button>Keluar <span class="las la-arrow-right">
                </span></button></a>
        </header>

        <main>
            
            <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataLabel">Tambah Absen Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="tambah_point.php" method="POST">
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
            <label for="total_point" class="form-label">Total Point</label>
            <input type="text" class="form-control" id="total_point" name="total_point" required>
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
                        <th scope="col">TOTAL POINT</th>
                    </tr>
                </thead>
<?php
                    include 'koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM point");
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nis']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jurusan']; ?></td>
                            <td><?php echo $data['total_point']; ?></td>
                            <td>
                              
                                
                            </td>
                            <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editDataLabel">Edit Absen Siswa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="ubah_point.php" method="POST">
                                                <input type="hidden" id="edit-nis" name="nis">
                                                <div class="mb-3">
                                                    <label for="edit-nama" class="form-label">Nama Siswa</label>
                                                    <input type="text" class="form-control" id="edit-nama" name="nama" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="edit-jurusan" class="form-label">Jurusan</label>
                                                    <input type="text" class="form-control" id="edit-jurusan" name="jurusan" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="edit-total_point" class="form-label">Total Point</label>
                                                    <input type="text" class="form-control" id="edit-total_point" name="total_point" required>
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
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-button');
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const nis = this.getAttribute('data-nis');
                    const nama = this.getAttribute('data-nama');
                    const jurusan = this.getAttribute('data-jurusan');
                    const absen = this.getAttribute('data-absen');

                    document.getElementById('edit-nis').value = nis;
                    document.getElementById('edit-nama').value = nama;
                    document.getElementById('edit-jurusan').value = jurusan;
                    document.getElementById('edit-total_point').value = total_point;
      });
    });
  });
</script>
</body>
</html>

