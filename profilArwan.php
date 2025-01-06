<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Siswa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        <link rel="stylesheet" href="profilesiswa1.css">
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
                    <a href="profilArwan.php" class="active"><span class="las la-user"></span> 
                        <span>Profil</span></a>
                </li>
                <li>
                    <a href="dashboradsiswa1.php" class=""><span class="las la-igloo"></span> 
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
                    <a href="poinArwan.php"><span class="las la-clipboard"></span> 
                        <span>Panduan Point</span></a>
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

                    Profil Siswa
                </h3>
                <a href="logout.php"><button>Keluar <span class="las la-arrow-right">
                </span></button></a>
        </header>

        <div class="container">
            <div class="card">
              <img src="arwan.jpg" alt="" class="profile-pic">
              <h1>Arwan Pradipta</h1>
              <h2>Siswa</h2>
              <p>Siswa SMK 5 Negeri Batam</p>
              
              <ul>
                <li>NIS : 33124110066</li>
                <li>Alamat: Batu Aji</li>
                <li>Email: arwanpradipta.gv@gmail.com</li>
              </ul>
              <div class="social-media">
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://twitter.com" target="_blank">Twitter</a>
                <a href="https://instagram.com" target="_blank">Instagram</a>
              </div>
            </div>
          </div>
</body>
</html>