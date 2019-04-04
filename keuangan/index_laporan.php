<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Akuntansi</title>
        <link rel="stylesheet" href="../css/style-laporan.css">
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
                    <a href="../kasir/index-transaksi.html" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="../img/icon_jurnal_umum.png">
                            <p class="text-menu" >Transaksi</p>
                        </li>
                    </a>
                    <a href="#" class="menu">
                        <li class="padding-menu" style="background: linear-gradient(201deg, #7c3182, #842f7f 17%, #9a2a76 43%, #bd2267 74%, #d91c5c 95%);   box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);">
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
            <input class="input-universal" type="text" style="width:70%;">
            <a href="#"><img id="search-universal" src="../img/icon_search_gray.png"></a>
            <p id="name-page">Kep.Bag.Keuangan</p>
            <div class="dropdown">
                <img class="img-profile" src="../img/img_profile.jpg">
                <div class="logout">
                    <a href="../logout.php" class="text-logout">Logout</a>
                </div>
            </div>
        </section>
        <section class="section-bottom">
            <p class="nama-akun">Jurnal Umum</p>
            <nav class="nav-top">
                <ul >
                    <li>
                        <a href="index_laporan.php" class="menu-bottom" style="color: #000000;">
                            <p class="text-menu">Buku Besar</p>
                        </a>
                    </li>
                    <li>
                        <a href="neraca.php" class="menu-bottom" style="color: #dddddd;">
                            <p class="text-menu">Neraca</p>
                        </a>
                    </li>
                    <li>
                        <a href="hutang.php" class="menu-bottom" style="color: #dddddd;">
                            <p class="text-menu">Hutang</p>
                        </a>
                    </li>
                    <li>
                        <a href="piutang.php" class="menu-bottom" style="color: #dddddd;">
                            <p class="text-menu">Piutang</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="nav-bottom" style="float: left;  width: 50%;">
                <ul >
                    <li>
                        <a href="neraca-lajur.php" class="menu-bottom" style="color: #dddddd;">
                            <p class="text-menu">Neraca Lajur</p>
                        </a>
                    </li>
                    <li>
                        <a href="laba-rugi.php" class="menu-bottom" style="color: #dddddd;">
                            <p class="text-menu">Laba/Rugi</p>
                        </a>
                    </li>
                    <li>
                        <a href="perubahan-modal.php" class="menu-bottom" style="color: #dddddd;">
                            <p class="text-menu">Perubahan Modal</p>
                        </a>
                    </li>
                    <li>
                        <a href="nssp.php" class="menu-bottom" style="color: #dddddd;">
                            <p class="text-menu">NSSP</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <div id="fitur-section">
            <input class="search-local" type="text" value="Cari" name="Cari">
            <a href="#"><img class="icon-search-local" src="../img/icon_search_pink.png"></a>
            </div>
        </section>
        <?php
        include "../include/koneksi.php"; ?>
        <main>
            <form style="width:90%; background-color: white;" class="main-top" method="post">
                <p class="text-filter" style="float:left;">Dari</p>
                <input class="date" style="float:left;" type="date" name="tanggal_awal">
                <p class="text-filter" style="float:left;">Sampai</p>
                <input class="date" style="float:left;" type="date" name="tanggal_akhir">
                <input type="submit" style="text-decoration: none; padding: 5px; margin-top: 13px; margin-left: -3px;" href="#" class="buat" name="cari">
            </form>
        </main>
        <?php
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['cari'])){
            //menangkap nilai form
            $tanggal_awal=$_POST['tanggal_awal'];
            $tanggal_akhir=$_POST['tanggal_akhir'];
            if(empty($tanggal_awal) || empty($tanggal_akhir)){
            //jika data tanggal kosong
            ?>
            <script language="JavaScript">
                alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
                document.location='index_laporan.php';
            </script>
            <?php
            }else{
            ?><i style="margin-left: 60px;"><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
            <?php
            $query=mysqli_query($koneksi, "select * from buku_besar where tanggal between '$tanggal_awal' and '$tanggal_akhir'");
            }
        ?>
        <main>
            <table>
                <tr>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 5%; border-top-left-radius: 10px;">Detail</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 1%;">No.</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 15%;">Tanggal</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 60%;">Laporan</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 10%; ">Status</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 1%; border-top-right-radius: 10px;">Print</th>
                </tr>
                <?php
                while($row=mysqli_fetch_array($query)){
                   ?>
                   <tr>
                       <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                       <td><?php echo $row['id_bukubesar'] ; ?></td>
                       <td><?php echo $row['tanggal'] ; ?></td>
                       <td></td>
                       <td><p class="sesuai">Sesuai</p></td>
                       <td><a a href="Buku Besar.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                   </tr>
                   <?php
                 }
                  ?>
                <?php include "../include/koneksi.php" ?>
                <?php
                   $no = 1;

                      if(isset($_GET['id_bukubesar'])){
                            $id = $_GET['tanggal'];
                                $sql = mysqli_query($koneksi,"select * from buku_besar where id_bukubesar='$id'");
                                 }else{
                                       $sql = mysqli_query($koneksi,"select * from buku_besar");
                                        }

                                           while($data = mysqli_fetch_array($sql)){
                                                ?>

                <tr>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                    <td><?php echo $row['id_bukubesar'] ; ?></td>
                    <td><?php echo $row['tanggal'] ; ?></td>
                    <td></td>
                    <td><p class="sesuai">Sesuai</p></td>
                    <td><a a href="Buku Besar.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                </tr>
                <?php
              } ?>
              <?php
            } ?>
            </table>
        </main>

                <script>
    if (!document.getElementsByTagName)
        return false;
    var links = document.getElementsByTagName("a");
    for (var eleLink=0; eleLink < links.length; eleLink ++)
    {
        if (links[eleLink].href.indexOf('.pdf') !== -1)
        {
            links[eleLink].onclick = function() { window.open(this.href,'resizable,scrollbars'); return false; }
        }
    }
</script>
    </body>
</html>
