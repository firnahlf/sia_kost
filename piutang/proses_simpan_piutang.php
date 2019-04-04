<?php
include "../include/koneksi.php";


//tampung data

$id_piutang = $_POST['id_piutang'];
$tgl_transaksi_piutang = $_POST['tgl_transaksi_piutang'];
$jumlah_piutang = $_POST['jumlah_piutang'];
$deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($koneksi, "INSERT INTO piutang (id_piutang, tgl_transaksi_piutang, jumlah_piutang, deskripsi)
    VALUES('$id_piutang', '$tgl_transaksi_piutang', '$jumlah_piutang', '$deskripsi')");

    $query2 = mysqli_query($koneksi, "INSERT INTO transaksi(id_transaksi, nama_transaksi, tgl_transaksi, nominal_transaksi, deskripsi)
    VALUES ('$id_piutang','','$tgl_transaksi_piutang','$jumlah_piutang','$deskripsi')");

    if($query && $query2)
    {
        ?>
            <script language="javascript">
              alert("Data transaksi piutang baru berhasil disimpan!");
              document.location.href="halaman_piutang.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Data transaksi piutang baru gagal disimpan!");
              document.location.href="inputpiutang.php";
            </script>
        <?php
    }

?>
