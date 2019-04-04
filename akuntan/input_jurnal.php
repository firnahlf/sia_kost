<?php include "../include/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Akuntansi</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <?php
    $baso="select * from jurnal_umum order by id_jurnal desc";
$q=mysqli_query($koneksi, $baso);
$jum=mysqli_num_rows($q);
if($jum > 0){
    $d=mysqli_fetch_array($q);
    $urut=substr($d["id_jurnal"],4,3)+1;
    if($urut<10){$id_jurnal="JR-00".$urut;}
    else if($urut<100){$id_jurnal="JR-0".$urut;}
    else{$id_jurnal="JR".$urut;}
}
else{$id_jurnal="JR-001";}
    ?>
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
                    <a href="data_jurnal.php" class="menu">
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
                    <a href="../home/kelola_user.php" class="menu">
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
            <nav style="float: left;  width: 52%; margin-top: -15px;">
                <ul >
                    <li style="margin-right: 30px;">
                        <a href="index_akuntan.php" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Data THP</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="data_jurnal.php" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Data Jurnal</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu" style="color: #000000;">
                            <p class="text-menu">Input Jurnal</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <main>
            <form action="proses_simpan_jurnal.php" method="post">
                <h4>Input Jurnal Umum</h4>
                <p class="input-jurnal">Id Jurnal<br>
                    <input class="value-input-jurnal" type="text" name="id_jurnal" value="<?php echo $id_jurnal;?>" required="required"><br>
                <p class="input-jurnal">Nomor Transaksi<br>
                    <select name="id_transaksi" id="id_transaksi" onchange="changeValue(this.value)" required="required">
                        <option value=0></option>
                        <?php
                        include "../include/koneksi.php";
                        $result = mysqli_query($koneksi, "SELECT * FROM transaksi");
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['id_transaksi'] . '">' . $row['id_transaksi'] . '</option>';
                        }
                        ?>
                    </select><br>
                    <br>
                <p class="input-jurnal">Tanggal<br>
                    <input class="value-input-jurnal" type="date" name="tanggal" required="required"><br><br>
                <p class="input-jurnal">Kode Akun<br>
                    <select name="id_akun" id="id_akun" onchange="hasil()" required="required">
                        <option value=0></option>
                        <?php
                        include "../include/koneksi.php";
                        $result = mysqli_query($koneksi, "SELECT * FROM akun");
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['nama_akun'] . '">' . $row['id_akun'] . '</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                <p style="float:left; width: 155px;" class="input-jurnal" name="nama_akun">Akun
                <p style="float:left; width: 30.5%;" class="input-jurnal" name="deskripsi">Deskripsi
                <p style="float:left; width: 20%;" class="input-jurnal" name="debit" placeholder="500000">Debit
                <p style="float:left; width: 20%; margin-right:100px;" class="input-jurnal" name="kredit" placeholder="500000">Kredit
                <div>
                    <input class="value-input-jurnal"  type="text" id="tampil" name="id_akun" required="required">
                    <script type="text/javascript">
                        function hasil(){
                            var tes = document.getElementById("id_akun").value;
                            document.getElementById("tampil").value=tes;
                        }
                    </script>
                    <input style="width: 30%;" class="value-input-jurnal" type="text" name="deskripsi" id="deskripsi">
                    <input style="width: 20%;" class="value-input-jurnal" type="number" name="debit" placeholder="50000" id="debit">
                    <input style="width: 20%;" class="value-input-jurnal" type="number" >
                    <br>
                    <input class="value-input-jurnal" type="text" name="nama_akun" required="required" >
                    <input style="width: 30%;" class="value-input-jurnal" type="text" name="deskripsi">
                    <input style="width: 20%;" class="value-input-jurnal" type="number">
                    <input style="width: 20%;" class="value-input-jurnal" type="number" name="kredit" placeholder="50000" id="kredit">
                    <input class="cek" type="button" value="CEK" onclick="cocok();"/>
                    <script type="text/javascript">
                        function cocok(){
                            var debit = document.getElementById("debit").value;
                            var kredit = document.getElementById("kredit").value;
                            if (kredit!=debit){
                                alert("tidak balance");
                            }else{
                                alert("balance");
                            }
                        }
                    </script>
                    <br>
                    <button type="submit" name="batal" class="btn-input" >BATAL</button>
                    <input type="submit" name="submit" class="btn-input" onclick="return confirm('Apakah Anda Yakin?')" value="TAMBAH">

                    <br>
                    <br>
                    <br>
                    <br>

                    </form>
                </main>
            </body>
        </html>
