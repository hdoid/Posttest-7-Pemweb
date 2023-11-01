<?php



?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Lomba</title>
    <link rel="icon" type="image/x-icon" href="asiangames.png">
    <link rel="stylesheet" href="posttest2style.css">
</head>


<body>
    <nav>
        <div class="top-nav">
            <div class="logo">
                <img src="asiangames.png" alt="Asian Games 2018">
            </div>
        <div class="nav-items" id="nav-items">
            <a href="#">Beranda</a>
            <a href="#">Info Perlombaan</a>
            <a href="#">Pengumuman</a>
            <a href="#">Tentang Saya</a>
            <a href="login.php" class="portal-btn" id="portal-btn">
            <button>Login</button>
        </a>
            <img src="darkicon.png" id="theme">
        </div>
    </nav>


    <section class="hero">
        <div></div>
        <img src="herofixasian.jpg" alt="opening">
        <div class="hero-title">
            <p>Countdown to Closing of Registration</p>
            <hr>    
            <h1>25 Hari : 10 Jam : 04 Menit</h1\>
            <br>
            <div class="daftar-button" id="daftar-button">
            <button onclick="showPopup()">Pendaftaran</button>
            <div class="popuptext" id="myPopup"> Pendaftaran Belum Dibuka </div>
            </div>
        </div>




    <section class="news">
        <div class="news-title">
            <h2>Jenis Perlombaan</h2>
        </div>
        <div class="news-container">
            <div class="news-card">
                <img src="lomba1.jpg" alt="">
                <div class="news-preview">
                    <h3>Perlombaan Atletik</h3>
                    <p>Serangkaian olahraga yang mencakup lari, lompat, dan lempar, yang menilai kecepatan, kekuatan, dan keterampilan atlet.</p>
                </div>
            </div>
            <div class="news-card">
                <img src="lomba3.jpg" alt="">
                <div class="news-preview">
                    <h3>Perlombaan Tenis</h3>
                    <p>Coming Soon, Tunggu Info Selanjutnya!</p>
                </div>
            </div>
            <div class="news-card">
                <img src="lomba2.jpg" alt=""><hr>
                <div class="news-preview">
                    <h3>Perlombaan Renang</h3>
                    <p>Coming Soon, Tunggu Info Selanjutnya!</p>
                </div>
            </div>   
            <div class="news-card">
                <img src="lomba4.jpeg" alt=""><hr>
                <div class="news-preview">
                    <h3>Perlombaan Basket</h3>
                    <p>Coming Soon, Tunggu Info Selanjutnya!</p>
                </div>
            </div>   
            <div class="news-card">
                <img src="lomba5.jpg" alt=""><hr>
                <div class="news-preview">
                    <h3>Perlombaan Panahan</h3>
                    <p>Coming Soon, Tunggu Info Selanjutnya!</p>
                </div>
            </div>   
            <div class="news-card">
                <img src="lomba6.jpg" alt=""><hr>
                <div class="news-preview">
                    <h3>Perlombaan Angkat Besi</h3>
                    <p>Coming Soon, Tunggu Info Selanjutnya!</p>
                </div>
            </div>   
    </section>


    <section class = "login">
        <form action = "daftar.php" method="post">
        <br><br>
        <h3> Form Pendaftaran </h3>
        <br><br>
        <label for = "nama">Nama Lengkap</label>
        <input type="text" name="nama" autocomplete = "off" placeholder = "Dio Dharmaesa"><br><br>
        <label for = "tempatlahir">Tempat Lahir</label>
        <input type="text" name="tempatlahir" autocomplete = "off" placeholder = "Samarinda"><br><br>
        <label for = "tanggallahir">Tanggal Lahir</label>
        <input type="date" name="tanggallahir" autocomplete = "off"><br><br>
        <label for = "alamat">Alamat</label>
        <input type="text" name="alamat" autocomplete = "off" placeholder = "Jln. xxxxxxx"><br><br>
        <label for = "notelp">No Telp</label>
        <input type="text" name="notelp" autocomplete = "off" placeholder = "08xxxxxxxxxx"><br><br>
        <label for = "email">Email</label>
        <input type="email" name="email" autocomplete = "off" placeholder = "xxxxx@gmail.com"><br><br>
        <!-- <label for = "username"></label>
        <input type="radio" name="radio" autocomplete = "off" placeholder = "xxxxx@gmail.com"><br><br> -->
        <label for = "password">Password</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value = "Daftar">
        </form>
        </section>      

    </section>



    <footer>
        <div class="info-container">
            <h2>About Me!</h2>
            <br>
            <img src="fotodioo.jpeg" alt="" height="100px">
            <br>
            Nama    : Dio Dharmaesa<br>
            NIM     : 2209106053<br>
            TTL     : Samarinda, 25 Oktober 2004<br>
            Alamat  : Perum Griya Asri, Sempaja Selatan<br>
            Asal Sekolah: SMA Negeri 1 Samarinda

            <p id="abo"> follow instagram: @diodrmaesaa_ thank u </p>

            <input type="button" value="Abaikan" 
            onclick="document.getElementById('abo').style.visibility='hidden'">
            
            <input type="button" value="Gas Follow"
            onclick="document.getElementById('abo').style.visibility='visible'">

        </div>
        <p>©2023   |    18th Asian Games 2018</p>
    </footer>
    
    <script src="script.js">
    </script>

</body>
</html>
