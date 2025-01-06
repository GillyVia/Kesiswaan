<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Siswa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        <link rel="stylesheet" href="panduanpointsiswa1.css">
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
                    <a href="dashboradsiswa1.html"><span class="las la-igloo"></span> 
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="absensiswaa.php"><span class="las la-users"></span> 
                        <span>Absen</span></a>
                </li>
                <li>
                    <a href="pointarwan.php"><span class="las la-clipboard-list"></span> 
                        <span>Point</span></a>
                </li>
                <li>
                    <a href="panduanpointsiswa.html" class="active"><span class="las la-clipboard"></span> 
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

                    Panduan Point
                </h2>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here" />
                </div>
                <div class="user-wrapper">
                    <a href="profilesiswaaaaaaaa.html"><img src="arwan.jpg" width="40px" height="40px" alt=""></a>
                    <div>
                        <h4>Arwan</h4>
                        <small>Siswa</small>
                    </div>
                </div>
                <a href="logout.php"><button>Keluar <span class="las la-arrow-right">
                </span></button></a>
        </header>

        <main>
            
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Panduan Point</h3>
                            
                            <a href="sppanduanpointsssss.html"><button>See all<span class="las la-arrow-right"></a>
                            </span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Pelanggaran</td>
                                            <td>Point</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cabut</td>
                                            <td>350</td>
                                        </tr>
                                        <tr>
                                                <td>Merokok</td>
                                            <td>750</td>
                                        </tr>
                                        <tr>
                                            <td>Berantam</td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>Rambunt Panjang</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>Beda Seragam</td>
                                            <td>100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="costumers">

                </div>
            </div>

        </main>
    </div>

</body>
</html>