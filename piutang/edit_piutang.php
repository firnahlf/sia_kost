<?php
include "../include/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Piutang</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <aside class="rectangle-70">
            <header>
                <h1 style="letter-spacing: 2.5px; text-align: center; color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">WARKOST</h1>
                <h1 class="name-apps">SEJAHTERA</h1>
            </header>
            <nav>
                <ul >
                    <li>
                    <a href="#" class="menu">
                    <img src="img/icon_home.png">
                    <p class="text-menu">Home</p>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="menu">
                    <img src="img/icon_jurnal_umum.png">
                    <p class="text-menu">Transaksi</p>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="menu">
                    <img src="img/icon_laporan.png">
                    <p class="text-menu">Laporan</p>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="menu">
                    <img src="img/icon_kelola.png">
                    <p class="text-menu">Kelola</p>
                    </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <a href="http://www.instagram.com"><img src="img/icon_instagram.png"></a>
                <a href="http://www.twitter.com"><img src="img/icon_twitter.png"></a>
                <a href="http://www.facebook.com"><img src="img/icon_fb.png"></a>
            </footer>

        </aside>

        <section class="section-top">
            <input style="float: left;" type="text">
            <a href="#"><img id="search-universal" src="img/icon_search_gray.png"></a>
            <p id="name-page">Piutang</p>
            <a href="#"><img class="img-profile" src="img/img_profile2.jpg"></a>
        </section>

        <section class="section-akun">
            <p class="nama-akun">Transaksi</p>
            <nav>
                <ul>
                    <li style="margin-right: 30px;">
                    <a href="halaman_piutang.php" class="menu" style="color: #dddddd;">
                    <p class="text-menu">Data Transaksi</p>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="menu" style="color: #000000;">
                    <p class="text-menu">Input Transaksi</p>
                    </a>
                    </li>
                </ul>
            </nav>
        </section>
        


        <section class="section-main">
            <p id="name-main">Input Transaksi Piutang</p>
            <form class="form-input" action="proses_simpan_piutang.php" method="post">

                <div class="group">
                    <label>Nomor Transaksi</label>
                    <input type="text" name="id_piutang" required="required" style="width: 200px; height: 26px; border-radius: 3px; background-color: #ffffff;" value="<?php echo $id_piutang;?>">
                </div>
                <div class="group">
                    <label>Tanggal</label>
                    <input class="input2" type="date" name="tgl_transaksi_piutang" required="required" style="width: 200px; height: 26px; border-radius: 3px; background-color: #ffffff;">
                </div>

                <div class="group2">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah_piutang" required="required" style="width: 300px; height: 26px; border-radius: 3px; background-color: #ffffff;">
                </div>
                <div class="group2">
                    <label>Dekripsi</label>
                    <input type="text" name="deskripsi" required="required" style="width: 500px; height: 26px; border-radius: 3px; background-color: #ffffff;">
                </div>
                <div class="btn-group">
                    <input class="btn-form" type="submit" name="tambah" onclick="return confirm('Apakah Anda Yakin?')"></button>
                    <button class="btn-form" style="margin-left: 10px">Batal</button>
                </div>
            </form>
        </section>

    </body>

</html>
