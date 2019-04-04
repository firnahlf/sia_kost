<?php
include "../include/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Akuntansi</title>
        <link rel="stylesheet" href="css/style.css">
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
                        <li class="padding-menu">
                            <img class="icon-menu" src="img/icon_home.png">
                            <p class="text-menu">Home</p>
                        </li>
                    </a>
                    <a href="index_akuntan.php" class="menu">
                        <li class="padding-menu" style="background: linear-gradient(201deg, #7c3182, #842f7f 17%, #9a2a76 43%, #bd2267 74%, #d91c5c 95%);   box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);">
                            <img class="icon-menu" src="img/icon_jurnal_umum.png">
                            <p class="text-menu" >Jurnal Umum</p>
                        </li>
                    </a>
                    <a href="../keuangan/index_laporan.php" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="img/icon_laporan.png">
                            <p class="text-menu">Laporan</p>
                        </li>
                    </a>
                    <a href="../admin/kelola_user.php" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="img/icon_kelola.png">
                            <p class="text-menu">Kelola</p>
                        </li>
                    </a>
                </ul>
            </nav>
            <footer>
                <a href="http://www.instagram.com"><img src="img/icon_instagram.png"></a>
                <a href="http://www.twitter.com"><img src="img/icon_twitter.png"></a>
                <a href="http://www.facebook.com"><img src="img/icon_fb.png"></a>
            </footer>
        </aside>
        <section class="section-top">
            <input class="input-universal" type="text">
            <a href="#"><img id="search-universal" src="img/icon_search_gray.png"></a>
            <p id="name-page">Akuntan</p>
            <div class="dropdown">
                <img class="img-profile" src="img/img_profile.jpg">
                <div class="logout">
                    <a href="../logout.php" class="text-logout">Logout</a>
                </div>
            </div>
        </section>
        <section class="section-akun">
            <p class="nama-akun">Jurnal Umum</p>
            <nav style="float: left;  width: 65.5%; margin-top: -15px;">
                <ul >
                    <li style="margin-right: 30px;">
                        <a href="index_akuntan.php" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Data THP</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="data_jurnal.php" class="menu" style="color: #000000;">
                            <p class="text-menu">Data Jurnal</p>
                        </a>
                    </li>
                    <li>
                        <a href="input_jurnal.php" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Input Jurnal</p>
                        </a>
                    </li>
                </ul>
            </nav>

            <input class="search-local" type="text" placeholder="cari" name="cari">
            <a href="#"><img class="icon-search-local" src="img/icon_search_pink.png"></a>
            <a href="input_jurnal.php" ><img class="button-section" style="width:34px; height:34px;" src="img/icon_add.png"></a>

          <?php
          if(isset($_GET['cari'])){
	           $cari = $_GET['cari'];
	            echo "<b>Hasil pencarian : ".$cari."</b>";
            }
            ?>
        </section>

        <main>
          <form class="filter" method="get">
            <div>
                <p class="text-filter" style="float:left;">Pilih tanggal :</p>
                <input class="date-filter" style="float:left;" type="date" name="tanggal">
                <input class="btn-filter" style="cursor: pointer;" type="submit" value="Filter">

            </div>
            </form>
        </main>

        <main>
            <table>
                <tr>
                    <th style="background-color: #dfdfdf; border-top-left-radius: 10px; width: 1%;"><img style="width: 30px;" src="img/icon_edit.png"></th>
                    <th style="background-color: #dfdfdf; width: 1%;"><img style="width: 30px;" src="img/icon_office.png"></th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 1%;">No.</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 13%;">No. Transaksi</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 13%;">No Akun</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 10%;">Tanggal</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 13%;">Debit</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 13%;">Kredit</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 10%; border-top-right-radius: 10px;">Status</th>
                </tr>
                <?php
	               if(isset($_GET['cari'])){
		                 $cari = $_GET['cari'];
		                   $sql = mysqli_query($koneksi,"select * from jurnal_umum where id_akun like '%".$cari."%'");
	                    }else{
		                      $sql = mysqli_query($koneksi,"select * from jurnal_umum");
	                       }
	                        $no = 1;
	                         while($d = mysqli_fetch_array($sql)){
	                            ?>
                              <tr>
                                  <td><a href="edit_jurnal.php" style="text-decoration: none;"><p class="edit">Ubah</p></a></td>
                                  <td><a href="delete_jurnal.php" style="text-decoration: none;"><p class="edit">Hapus</p></a></td>
                                  <td><?php echo $d['id_jurnal'] ; ?></td>
                                  <td><?php echo $d['id_transaksi'] ; ?></td>
                                  <td><?php echo $d['id_akun'] ; ?></td>
                                  <td><?php echo $d['tanggal'] ; ?></td>
                                  <td><?php echo $d['debit'] ; ?></td>
                                  <td><?php echo $d['kredit'] ; ?></td>
                                  <td><p class="sesuai">Sesuai</p></td>
                              </tr>


                <?php
                   $no = 1;
                      if(isset($_GET['tanggal'])){
                            $tanggal = $_GET['tanggal'];
                                $sql = mysqli_query($koneksi,"select * from jurnal_umum where tanggal='$tanggal'");
                                 }else{
                                       $sql = mysqli_query($koneksi,"select * from jurnal_umum");
                                        }

                                           while($data = mysqli_fetch_array($sql)){
                                                ?>

                <tr>
                    <td><a href="edit_jurnal.php" style="text-decoration: none;"><p class="edit">Ubah</p></a></td>
                    <td><a href="delete_jurnal.php" style="text-decoration: none;"><p class="edit">Hapus</p></a></td>
                    <td><?php echo $data['id_jurnal'] ; ?></td>
                    <td><?php echo $data['id_transaksi'] ; ?></td>
                    <td><?php echo $data['id_akun'] ; ?></td>
                    <td><?php echo $data['tanggal'] ; ?></td>
                    <td><?php echo $data['debit'] ; ?></td>
                    <td><?php echo $data['kredit'] ; ?></td>
                    <td><p class="sesuai">Sesuai</p></td>
                </tr>
                <?php
              }

                 ?>
                 <?php
               }
                ?>

            </table>
        </main>
    </body>
</html>
