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
                    <a href="../kasir/index-transaksi.html" class="menu">
                        <li class="padding-menu">
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
                    <a href="#" class="menu">
                        <li class="padding-menu" style="background: linear-gradient(201deg, #7c3182, #842f7f 17%, #9a2a76 43%, #bd2267 74%, #d91c5c 95%);   box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);">
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
            <input class="input-universal" type="text" style="width:73%;">
            <a href="#"><img id="search-universal" src="../img/icon_search_gray.png"></a>
            <p id="name-page">Administrator</p>
            <div class="dropdown">
                <img class="img-profile" src="../img/img_profile.jpg">
                <div class="logout">
                    <a href="../login.html" class="text-logout">Logout</a>
                </div>
            </div>
        </section>
        <section class="section-akun">
            <p class="nama-akun">Kelola</p>
            <nav style="float: left;  width: 53.5%; margin-top: -15px;">
                <ul >
                    <li style="margin-right: 30px;">
                        <a href="index-admin.html" class="menu" style="color: #000000">
                            <p class="text-menu">Kelola Akun</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="kelola-user.html" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Kelola User</p>
                        </a>
                    </li>
                </ul> 
            </nav>
            <a href="#"><img class="button-section" src="../img/icon_filter.png"></a>
            <input class="search-local" type="text" value="Cari" name="Cari">
            <a href="#"><img class="icon-search-local" src="../img/icon_search_pink.png"></a>
            <a href="input-akun.html" ><img class="button-section" style="width:34px; height:34px;" src="../img/icon_add.png"></a>
            <a href="#"><p class="btn-input">Hapus</p></a>
        </section>
        <p class="mode-hapus">Anda berada dalam mode hapus, Ingat untuk selalu mencadangkan data anda sebelum melakukan penghapusan.</p>
        <a href="index-admin.html" ><p class="batal-hapus">Batal</p></a>
        <main>
            <table>
                <tr>
                    <th style="background-color: #dfdfdf; border-top-left-radius: 10px; width: 1%;"><img style="width: 30px;" src="../img/icon_edit.png"></th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 20%;">Kode Akun</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 85%;">Nama Akun</th>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>111</td>
                    <td class="value-namaakun">Kas</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>112</td>
                    <td class="value-namaakun">Peralatan Kos</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>211</td>
                    <td class="value-namaakun">Hutang Kos</td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>411</td>
                    <td class="value-namaakun">Modal</td>
                </tr>
            </table>
        </main>
    </body>
</html>