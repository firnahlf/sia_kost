<?php
include "../include/koneksi.php";


//tampung data

$id_transaksi = $_POST['id_transaksi'];
$nama_transaksi = $_POST['nama_transaksi'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$nominal_transaksi = $_POST['nominal_transaksi'];
$deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($koneksi, "INSERT INTO transaksi (id_transaksi, nama_transaksi, tgl_transaksi, nominal_transaksi, deskripsi)
    VALUES('$id_transaksi', '$nama_transaksi', '$tgl_transaksi', '$nominal_transaksi', '$deskripsi')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Data transaksi baru berhasil disimpan!");
              document.location.href="index_transaksi.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Data transaksi baru gagal disimpan!");
              document.location.href="input_transaksi.php";
            </script>
        <?php
    }

?>
