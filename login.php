<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Akuntansi</title>
        <link rel="stylesheet" href="css/style-login.css">

    </head>
    <body>
      	<form action="ceklogin.php" method="post">
        <section class="section-login">
            <div class="border-input">
                <img class="icon-login" src="img/icon_profile.png">
                <input class="input-login" type="text" name="akun" placeholder="Akun">
            </div>
            <div class="border-input">
                <img class="icon-login" src="img/icon_sequrity.png">
                <input class="input-login" type="password" name="password" placeholder="Kata sandi">
            </div>
            <input style="float: left; margin-right:10px; margin-top: 20px;" type="checkbox" name="remember" value="Ingatkan Saya">
            <a href="#"><p id="remember-password" class="text-checkbox" style="float:right; font-style: italic;">Lupa kata Sandi?</p></a>
            <p class="text-checkbox">Ingatkan Saya</p>
            <input type="submit" class="button" value="LOGIN">
        </section>
      </form>

        <footer>
            <h2>WARKOST <br> SEJAHTERA</h2>
            <p class="copyright">&copy; Copyright 2018 Warkost Sejahtera, Inc</p>
            <div class="sosmed">
                <a class="shadow" href="http://www.instagram.com"><img src="img/icon_instagram.png"></a>
                <a class="shadow" href="http://www.twitter.com"><img src="img/icon_twitter.png"></a>
                <a class="shadow" href="http://www.facebook.com"><img src="img/icon_fb.png"></a>
            <p class="text-sosmed">&copy; Warkost Sejahtera</p>
            </div>
        </footer>
    </body>
</html>
