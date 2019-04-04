<?php
include "../include/koneksi.php";


//tampung data

$akun = $_POST['akun'];
$password = $_POST['password'];
$level = $_POST['level'];

    $query = mysqli_query($koneksi, "INSERT INTO user (akun, password, level)
    VALUES('$akun', '$password', '$level')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Data user baru berhasil disimpan!");
              document.location.href="kelola_user.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Data user baru gagal disimpan!");
              document.location.href="input_user.php";
            </script>
        <?php
    }

?>
