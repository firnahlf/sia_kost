<?php include "../include/koneksi.php" ?>
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
            <div class="dropdown">
                <img class="img-profile" src="img/img_profile2.jpg">
                <div class="logout">
                    <a href="../logout.php" class="text-logout">Logout</a>
                </div>
            </div>
        </section>

        <section class="section-akun">
            <p class="nama-akun">Transaksi</p>
            <nav>
                <ul>
                    <li style="margin-right: 30px;">
                    <a href="#" class="menu" style="color: #000000;">
                    <p class="text-menu">Data Transaksi</p>
                    </a>
                    </li>
                    <li>
                    <a href="inputpiutang.php" class="menu" style="color: #dddddd;">
                    <p class="text-menu">Input Transaksi</p>
                    </a>
                    </li>
                </ul>
            </nav>
        </section>

        <table id="transaksi">
            <tr>
                <th style="background-color: #dfdfdf; border-top-left-radius: 10px; width: 1%;"><img style="width: 30px;" src="img/icon_edit.png"></th>
                <th style="background-color: #dfdfdf; border-top-left-radius: 10px; width: 1%;"><img style="width: 30px;"></th>
                <th style="width: 8%; background-color: #dfdfdf;">No. Transaksi</th>
                <th style="width: 8%; background-color: #dfdfdf;">Tanggal</th>
                <th style="background-color: #dfdfdf; width: 30%;">Deskripsi</th>
                <th style="width: 10%; background-color: #dfdfdf; border-top-right-radius: 10px;">Jumlah</th>
            </tr>
            <?php
            include "../include/koneksi.php";
            $baca = mysqli_query($koneksi, "SELECT * FROM piutang");
            while( $tampil = mysqli_fetch_array($baca))
            {
              ?>
            <tr>
                <td><a href="edit_piutang.php" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                <td><a href="delete_piutang.php" style="text-decoration: none;"><p class="edit">hapus </p></a></td>
                <td><?php echo $tampil['id_piutang'] ; ?></td>
                <td><?php echo $tampil['tgl_transaksi_piutang'] ; ?></td>
                <td><?php echo $tampil['deskripsi'] ; ?></td>
                <td><?php echo $tampil['jumlah_piutang'] ; ?></td>
            </tr>
            <?php
          }
           ?>
        </table>


    </body>

</html>
