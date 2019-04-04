<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Akuntansi</title>
        <link rel="stylesheet" href="../css/style-admin.css">
    </head>

    <body>
        <aside class="rectangle-70">
            <header>
                <h1 style="letter-spacing: 2.5px; text-align: center; color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">WARKOST</h1>
                <h1 class="name-apps">SEJAHTERA</h1>
            </header>
            <nav style="margin-left: -60px; margin-right: -60px;">
                <ul>
                    <a href="#" class="menu">
                        <li class="padding-menu">

                            <img class="icon-menu" src="../img/icon_home.png">
                            <p class="text-menu">Home</p>


                        </li>
                    </a>
                    <a href="#" class="menu">
                        <li class="padding-menu" style="background: linear-gradient(201deg, #7c3182, #842f7f 17%, #9a2a76 43%, #bd2267 74%, #d91c5c 95%);   box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);">

                            <img class="icon-menu" src="../img/icon_jurnal_umum.png">
                            <p class="text-menu" >Transaksi</p>

                        </li>
                    </a>
                    <a href="#" class="menu">
                        <li class="padding-menu">

                            <img class="icon-menu" src="../img/icon_laporan.png">
                            <p class="text-menu">Laporan</p>
                        </li>
                    </a>
                    <a href="../admin/index-admin.html" class="menu">
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
            <input class="input-universal" type="text" style="width:78%;">
            <a href="#"><img id="search-universal" src="../img/icon_search_gray.png"></a>
            <p id="name-page">Kasir</p>
            <div class="dropdown">
                <img class="img-profile" src="../img/img_profile.jpg">
                <div class="logout">
                    <a href="../logout.php" class="text-logout">Logout</a>
                </div>
            </div>
        </section>

        <section class="section-akun">
            <p class="nama-akun">Kelola</p>
            <nav style="float: left;  width: 65.5%; margin-top: -15px;">
                <ul >
                    <li style="margin-right: 30px;">
                        <a href="index_transaksi.php" class="menu" style="color: #000000;">
                            <p class="text-menu">Data Transaksi</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="input_transaksi.php" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Input Transaksi</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <input class="search-local" type="text" placeholder="Cari" name="cari" id="cari" formmethod="get">
            <a href="#"><img class="icon-search-local" src="../img/icon_search_pink.png"></a>
            <a href="input_transaksi.php" ><img class="button-section" style="width:34px; height:34px;" src="../img/icon_add.png"></a>
        </section>

        <?php include "../include/koneksi.php" ?>

        <main>
            <form class="filter" method="get">
                <div>
                    <p class="text-filter" style="float:left;">Pilih tanggal :</p>
                    <input class="date-filter" style="float:left;" type="date" name="tgl_transaksi">
                    <input class="btn-filter" style="cursor: pointer;" type="submit" value="Filter">
                </div>
            </form>
        </main>

        <main>
            <table>
                <tr>
                    <th style="background-color: #dfdfdf; border-top-left-radius: 10px; width: 1%;"><img style="width: 30px;" src="../img/icon_edit.png"></th>
                    <th style="background-color: #dfdfdf; width: 1%;"><img style="width: 30px;" src="../img/icon_office.png"></th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 13%;">No. Transaksi</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 13%;">Nama Transaksi</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 10%;">Tanggal</th>
                    <th style="background-color: #dfdfdf; margin-right: 100px; font-weight: bold;">Deskripsi</th>
                    <th style="background-color: #dfdfdf; border-top-right-radius: 10px; font-weight: bold; width: 13%;">Jumlah</th>
                </tr>
                <?php
    $no = 1;

        if(isset($_GET['tgl_transaksi'])){
            $tgl = $_GET['tgl_transaksi'];
            $sql = mysqli_query($koneksi,"select * from transaksi where tgl_transaksi='$tgl'");
        }else{
            $sql = mysqli_query($koneksi,"select * from transaksi");
        }

        while($data = mysqli_fetch_array($sql)){
                ?>

                <tr>
                    <td><a href="edit_transaksi.php" style="text-decoration: none;"><p class="edit">Ubah</p></a></td>
                    <td><a href="delete_transaksi.php" style="text-decoration: none;"><p class="edit">Hapus</p></a></td>
                    <td><?php echo $data['id_transaksi'] ; ?></td>
                    <td><?php echo $data['nama_transaksi'] ; ?></td>
                    <td><?php echo $data['tgl_transaksi'] ; ?></td>
                    <td><?php echo $data['deskripsi'] ; ?></td>
                    <td style="text-align: right;"><?php echo $data['nominal_transaksi'] ; ?></td>

                </tr>


                <?php
        }
                ?>
            </table>
        </main>
    </body>

</html>
