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
            <nav style="float: left;  width: 52%; margin-top: -15px;">
                <ul >
                    <li style="margin-right: 30px;">
                        <a href="index-admin.html" class="menu" style="color: #dddddd;">
                            <p class="text-menu">Kelola Akun</p>
                        </a>
                    </li>
                    <li style="margin-right: 30px;">
                        <a href="kelola-user.html" class="menu" style="color: #000000;">
                            <p class="text-menu">Kelola User</p>
                        </a>
                    </li>
                </ul> 
            </nav>
        </section>

        <main>   
            <form class="form-kasir">
               <p class="name-main">Ubah User</p>
                <div class="group-akun">
                    <label>Username</label>
                    <br>
                    <input class="input-user" type="text" name="username" value="luthfi3" required="required">
                </div>
                <div class="group-akun">
                    <label>Email</label>
                    <br>
                    <input class="input-user" type="email" name="email" value="muhamadluthfi@gmail.com" required="required">
                </div>
                <div class="group-akun">
                    <label>Password</label>
                    <br>
                    <input class="input-user" type="password" name="password" value="admin" required="required">
                </div>
                <div class="group-akun">
                    <label>Telepon</label>
                    <br>
                    <input class="input-user" type="tel" name="email" value="085714644151" required="required">
                </div>
                <div class="group-akun">
                    <label>Nama Lengkap</label>
                    <br>
                    <input class="input-user" type="text" name="name" value="Muhammad Lutfi" required="required">
                </div>
                <div class="group-akun">
                    <label>Sebagai</label>
                    <br>
                    <input style="margin-right: -100px;" class="input-user" type="text" name="email" value="Kabag.Keuangan" required="required">
                </div>
                <a href="kelola_user.php"><button class="btn-input">BATAL</button></a>
                <input type="submit" class="btn-input" value="UBAH">
                </form>
        </main>
    </body>

</html>