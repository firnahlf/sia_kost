<?php
include '../include/koneksi.php';
if($_SERVER['REQUEST_METHOD'] == "GET"){
$id_transaksi = isset($_GET['id_transaksi']);
$query = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_transaksi ='$id_transaksi'");
$tampil = mysqli_fetch_array($query);
?>

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
                    <a href="../login.html" class="text-logout">Logout</a>
                </div>
            </div>
        </section>

        <section class="section-akun">
            <p class="nama-akun">Kelola</p>
            <nav style="float: left;  width: 52%; margin-top: -15px;">
                <ul >
                    <li style="margin-right: 30px;">
                        <a href="data-transaksi.html" class="menu" style="color: #000000">
                            <p class="text-menu">Data Transaksi</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="index-transaksi.html" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Input Transaksi</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="#"><img class="button-section" src="../img/icon_filter.png"></a>
            <input class="search-local" type="text" value="Cari" name="Cari">
            <a href="#"><img class="icon-search-local" src="../img/icon_search_pink.png"></a>

        </section>

        <main>
            <form action="proses_edit_transaksi.php" method="post">
               <p class="name-main">Input Transaksi</p>
                <div class="group-transaksi">
                    <label>Pendapatan/Pengeluaran</label>
                    <br>
                    <input class="input-user" type="text" name="nama_transaksi" value="<?php echo $tampil['nama_transaksi'] ;?>" required="required">
                    <a href="#"><img class="dropdown-main" src="../img/icon_dropdown.png"></a>
                </div>
                <div class="group-transaksi">
                    <label>Tanggal</label>
                    <br>
                    <input class="input-user" type="date" name="username" value="<?php echo $tampil['tgl_transaksi'] ;?>" required="required">
                </div>
                <div class="group-transaksi">
                    <label>Nomor Transaksi</label>
                    <br>
                    <input class="input-user" type="text" name="username" value="<?php echo $tampil['id_transaksi'] ;?>" required="required">
                </div>
                <br>
                <div class="group-transaksi">
                    <label>Deskripsi</label>
                    <br>
                    <input style="width: 510px; margin-right: 80px;" class="input-user" type="tel" name="username" value="<?php echo $tampil['deskripsi'] ;?>" required="required">
                </div>
                <div class="group-transaksi">
                    <label>Jumlah</label>
                    <br>
                    <input class="input-user" type="text" name="username" value="<?php echo $tampil['nominal_transaksi'] ;?>" required="required">
                </div>
                <a href="index_transaksi.php"><p class="btn-ubah">Batal</p></a>
                <input type="submit" name="edit" class="btn-ubah" value="Ubah">
                </form>
        </main>
    </body>

</html>
