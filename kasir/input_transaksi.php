<?php
include "../include/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Akuntansi</title>
        <link rel="stylesheet" href="../css/style-admin.css">
    </head>
    <?php
    $baso="select * from transaksi order by id_transaksi desc";
$q=mysqli_query($koneksi, $baso);
$jum=mysqli_num_rows($q);
if($jum > 0){
    $d=mysqli_fetch_array($q);
    $urut=substr($d["id_transaksi"],4,3)+1;
    if($urut<10){$id_transaksi="TR-00".$urut;}
    else if($urut<100){$id_transaksi="TR-0".$urut;}
    else{$id_transaksi="TR".$urut;}
}
else{$id_transaksi="TR-001";}
    ?>
    <body>
        <aside class="rectangle-70">
            <header>
                <h1 style="letter-spacing: 2.5px; text-align: center; color: #ffffff; font-family: Arial, Helvetica, sans-serif; font-size: 20px;">WARKOST</h1>
                <h1 class="name-apps">SEJAHTERA</h1>
            </header>
            <nav style="margin-left: -60px; margin-right: -60px;">
                <ul>
                    <a href="home/index_home.php" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="../img/icon_home.png">
                            <p class="text-menu">Home</p>
                        </li>
                    </a>
                    <a href="data_transaksi.php" class="menu">
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
                        <a href="index_transaksi.php" class="menu" style="color: #dddddd">
                            <p class="text-menu">Data Transaksi</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="input_transaksi.php" class="menu" style="color: #000000;">
                            <p class="text-menu">Input Transaksi</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <main>
            <form class="form-kasir" action="proses_simpan_transaksi.php" method="post">
                <p class="name-main">Input Transaksi</p>
                <div class="group-transaksi">
                    <label>Nama Transaksi</label>
                    <br>
                    <select style="margin-top:5px; width: 130px;" class="dropdown"  name="nama_transaksi"  required="required">
                        <option value="pemasukan">Pemasukan</option>
                        <option value="pengeluaran">Pengeluaran</option></select>
                </div>
                <div class="group-transaksi">
                    <label>Tanggal</label>
                    <br>
                    <input class="input-user" type="date" name="tgl_transaksi" required="required">
                </div>
                <div class="group-transaksi">
                    <label>Nomor Transaksi</label>
                    <br>
                    <input class="input-user" type="text" name="id_transaksi"  value="<?php echo $id_transaksi;?>" required="required">
                </div>
                <br>
                <div class="group-transaksi">
                    <label>Jumlah</label>
                    <br>
                    <input class="input-user" type="number" name="nominal_transaksi" placeholder="jumlah=5000000"required="required">
                </div>
                <div class="group-transaksi">
                    <label>Deskripsi</label>
                    <br>
                    <textarea style="width: 510px; height: 80px; margin-right: 80px;" class="input-user" type="text" name="deskripsi" required="required"></textarea>
                </div>
                <br>
            <div>
               <button class="btn-input" style="margin-left: 10px">BATAL</button>
                <input class="btn-input" type="submit" name="tambah" onclick="return confirm('Apakah Anda Yakin?')" value="TAMBAH">
            </div>
            </form>
        </main>
    </body>
</html>
