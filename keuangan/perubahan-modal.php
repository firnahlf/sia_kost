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
                    <a href="../login.html" class="text-logout">Logout</a>
                </div>
            </div>
        </section>
        <section class="section-bottom">
            <p class="nama-akun">Jurnal Umum</p>
            <nav class="nav-top">
                <ul >
                    <li>
                        <a href="index-laporan.php" class="menu-bottom" style="color: #dddddd;">
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
            <nav class="nav-bottom" style="float: left;  width: 43%;">
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
                        <a href="perubahan-modal.php" class="menu-bottom" style="color: #000000;">
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
            <input class="input-filter" type="date" name="username" required="required">
            <a href="#"><img class="button-section" src="../img/icon_filter.png"></a>
            <input class="search-local" type="text" value="Cari" name="Cari">
            <a href="#"><img class="icon-search-local" src="../img/icon_search_pink.png"></a>
            <a href="#"><img class="button-section" style="width:34px; height:34px;" src="../img/icon_office.png"></a>
            </div>
        </section>
        <main>
            <div class="main-top">
                <p class="text-filter" style="float:left;">Dari</p>
                <input class="date" style="float:left;" type="date">
                <p class="text-filter" style="float:left;">Sampai</p>
                <input class="date" style="float:left;" type="date">
                <a class="filter" style="float:left;" href="#"><img class="button-section" src="../img/icon_filter.png"></a>
                <a style="text-decoration: none;" href="#" class="buat"><p>Buat</p></a>
            </div>
        </main>
        <main>
            <table>
                <tr>
                    <th style="background-color: #dfdfdf; border-top-left-radius: 10px; width: 1%;"><img style="width: 30px;" src="../img/icon_edit.png"></th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 1%;">Detail</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 1%;">No.</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 10%;">Dari Tanggal</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 10%;">Sampai Tanggal</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 30%;">Laporan</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 10%; border-top-right-radius: 10px;">Status</th>
                    <th style="background-color: #dfdfdf; font-weight: bold; width: 1%;">Print</th>
                </tr>
                <tr>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                    <td>1</td>
                    <td>31/07/2018</td>
                    <td>31/08/2018</td>
                    <td></td>
                    <td><p class="sesuai">Sesuai</p></td>
                    <td><a a href="Perubahan Modal.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                </tr>
                <tr>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                    <td>2</td>
                    <td>31/07/2018</td>
                    <td>31/08/2018</td>
                    <td></td>
                    <td><p class="sesuai">Sesuai</p></td>
                    <td><a a href="Perubahan Modal.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                </tr>
                <tr>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                    <td>3</td>
                    <td>31/07/2018</td>
                    <td>31/08/2018</td>
                    <td></td>
                    <td><p class="sesuai">Sesuai</p></td>
                    <td><a a href="Perubahan Modal.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                </tr>
                <tr>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                    <td>4</td>
                    <td>31/07/2018</td>
                    <td>31/08/2018</td>
                    <td></td>
                    <td><p class="sesuai">Sesuai</p></td>
                    <td><a a href="Perubahan Modal.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                </tr>
                <tr>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                    <td>5</td>
                    <td>31/07/2018</td>
                    <td>31/08/2018</td>
                    <td></td>
                    <td><p class="sesuai">Sesuai</p></td>
                    <td><a a href="Perubahan Modal.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                </tr>
                <tr>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">ubah</p></a></td>
                    <td><a href="#" style="text-decoration: none;"><p class="edit">Tampilkan</p></a></td>
                    <td>6</td>
                    <td>31/07/2018</td>
                    <td>31/08/2018</td>
                    <td></td>
                    <td><p class="sesuai">Sesuai</p></td>
                    <td><a a href="Perubahan Modal.pdf" target="blank"><img style="width:34px; height:34px;" src="../img/icon_print.png"></a></td>
                </tr>
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