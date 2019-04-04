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
                    <a href="#" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="img/icon_home.png">
                            <p class="text-menu">Home</p>
                        </li>
                    </a>
                    <a href="#" class="menu">
                        <li class="padding-menu" style="background: linear-gradient(201deg, #7c3182, #842f7f 17%, #9a2a76 43%, #bd2267 74%, #d91c5c 95%);   box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);">
                            <img class="icon-menu" src="img/icon_jurnal_umum.png">
                            <p class="text-menu" >Jurnal Umum</p>
                        </li>
                    </a>
                    <a href="#" class="menu">
                        <li class="padding-menu">
                            <img class="icon-menu" src="img/icon_laporan.png">
                            <p class="text-menu">Laporan</p>
                        </li>
                    </a>
                    <a href="#" class="menu">
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
                    <a href="login.html" class="text-logout">Logout</a>
                </div>
            </div> 
        </section>

        <section class="section-akun">
            <p class="nama-akun">Jurnal Umum</p>
            <nav style="float: left;  width: 52%; margin-top: -15px;">
                <ul >
                    <li style="margin-right: 30px;">
                        <a href="index-akuntan.html" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Data THP</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="data-jurnal.html" class="menu" style="color: #000000;">
                            <p class="text-menu">Data Jurnal</p>
                        </a>
                    </li>
                    <li>
                        <a href="input-jurnal.html" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Input Jurnal</p>
                        </a>
                    </li>
                </ul> 
            </nav>
            <a href="#"><img class="button-section" src="img/icon_filter.png"></a>
            <input class="search-local" type="text" value="Cari" name="Cari">
            <a href="#"><img class="icon-search-local" src="img/icon_search_pink.png"></a>
            <a href="data-jurnal.html"><p class="btn-input">Batal</p></a>
            <a href="#"><p class="btn-input">Ubah</p></a>
        </section>

        <main>
            <form>
                <h4>Ubah Jurnal Umum</h4>
                <p class="input-jurnal">Nomor Transaksi<br>
                    <input class="value-input-jurnal" type="number" min="0" max="1000" step="1" value="0" size="6"><br><br>
                <p class="input-jurnal">Tanggal<br>
                    <input class="value-input-jurnal" type="date"><br><br>
                
                <p style="float:left; width: 155px;" class="input-jurnal">Akun
                <p style="float:left; width: 30.5%;" class="input-jurnal">Deskripsi
                <p style="float:left; width: 20%;" class="input-jurnal">Debit
                <p style="float:left; width: 20%; margin-right:100px;" class="input-jurnal">Kredit
                <div></div>
                <input class="value-input-jurnal" type="text" >
                <a href="#"><img style="width:12px; background-color:white;" src="img/icon_dropdown.png"></a>
                <input style="width: 30%;" class="value-input-jurnal" type="text" >
                <input style="width: 20%;" class="value-input-jurnal" type="text" >
                <input style="width: 20%;" class="value-input-jurnal" type="text" >
                <a href="#"><img style="width: 18px;" src="img/icon_close.png"></a>
                <br>
                <input class="value-input-jurnal" type="text" >
                <a href="#"><img style="width:12px; background-color:white;" src="img/icon_dropdown.png"></a>
                <input style="width: 30%;" class="value-input-jurnal" type="text" >
                <input style="width: 20%;" class="value-input-jurnal" type="text" >
                <input style="width: 20%;" class="value-input-jurnal" type="text" >
                <a href="#"><img style="width: 18px;" src="img/icon_close.png"></a>
                <br>
                <a href="#"><img style="width: 30px; margin-top: 5px;" src="img/icon_add.png"></a>
                <p style="float:right; margin-right: 118px; color:red; margin-left:8px; margin-top: -1px; padding-top: 13px; font-size: 0.8em;" >0</p>
                <input style="width: 20%; float:right; margin-left:4px; text-align: right;" class="value-input-jurnal" type="text" value="0" name="0" >
                <input style="width: 20%; float:right; text-align: right;" class="value-input-jurnal" type="text" value="0" name="0">
            </form>
        </main>

    </body>

</html>