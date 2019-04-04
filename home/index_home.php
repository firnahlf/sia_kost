<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Akuntansi</title>
        <link rel="stylesheet" href="../css/style-home.css">
    </head>

    <body>
        <aside class="rectangle-70">
            <header>
                <h1 style="letter-spacing: 2.5px; text-align: center; color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">WARKOST</h1>
                <h1 class="name-apps">SEJAHTERA</h1>
            </header>
            <nav style="margin-left: -60px; margin-right: -60px;">
                <ul>
                    <a href="../home/index_home.php" class="menu">
                        <li class="padding-menu" style="background: linear-gradient(201deg, #7c3182, #842f7f 17%, #9a2a76 43%, #bd2267 74%, #d91c5c 95%);   box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);">
                            <img class="icon-menu" src="../img/icon_home.png">
                            <p class="text-menu">Home</p>
                        </li>
                    </a>
                    <a href="../kasir/transaksi.php" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="../img/icon_jurnal_umum.png">
                            <p class="text-menu" >Transaksi</p>
                        </li>
                    </a>
                    <a href="../keuangan/index_laporan.php" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="../img/icon_laporan.png">
                            <p class="text-menu">Laporan</p>
                        </li>
                    </a>
                    <a href="../admin/index_admin.php" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="../img/icon_kelola.png">
                            <p class="text-menu">Kelola</p>
                        </li>
                    </a>
                </ul>
            </nav>
            <footer>
                <a href="http://www.instagram.com"><img src="../img/icon_instagram.png"></a>
                <a href="http://www.twitter.com"><img src="../img/icon_twitter.png"></a>
                <a href="http://www.facebook.com"><img src="../img/icon_fb.png"></a>
            </footer>

        </aside>

        <section class="section-top">
            <input class="input-universal" type="text" style="width:77%;">
            <a href="#"><img id="search-universal" src="../img/icon_search_gray.png"></a>
            <p id="name-page">Semua</p>
            <div class="dropdown">
                <img class="img-profile" src="../img/img_profile.jpg">
                <div class="logout">
                    <a href="../login.php" class="text-logout">Logout</a>
                </div>
            </div>
        </section>

        <section class="section-akun">
            <p class="nama-akun">Home</p>
        </section>

        <main>
            <p class="grafik">Grafik Pemasukan</p>
            <img style="width: 500px;" src="../img/grafik-pemasukan.PNG">
            <p class="grafik">Grafik Pengeluaran</p>
            <img style="width: 500px;" src="../img/grafik-pengeluaran.PNG">
        </main>
        <section id="main-right">
            <p class="background-purple">Pemasukan Hari ini</p>
            <p class="background-purple">Laporan Laba/Rugi</p>
            <p class="background-purple">Laporan</p>
        </section>
    </body>

</html>
