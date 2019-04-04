<?php
include "../include/koneksi.php";


//tampung data

$nama_akun = $_POST['nama_akun'];
$no_akun = $_POST['no_akun'];

    $query = mysqli_query($koneksi, "INSERT INTO akun (nama_akun, no_akun)
    VALUES('$nama_akun', '$no_akun')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Data akun baru berhasil disimpan!");
              document.location.href="index_admin.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Data akun baru gagal disimpan!");
              document.location.href="input_akun.php";
            </script>
        <?php
    }

?>
