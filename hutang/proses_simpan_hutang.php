<?php
include "../include/koneksi.php";


//tampung data

$id_hutang = $_POST['id_hutang'];
$tgl_transaksi_htng = $_POST['tgl_transaksi_htng'];
$jumlah_hutang = $_POST['jumlah_hutang'];
$deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($koneksi, "INSERT INTO hutang (id_hutang, tgl_transaksi_htng, jumlah_hutang, deskripsi)
    VALUES('$id_hutang', '$tgl_transaksi_htng', '$jumlah_hutang', '$deskripsi')");

    $query2 = mysqli_query($koneksi, "INSERT INTO transaksi(id_transaksi, nama_transaksi, tgl_transaksi, nominal_transaksi, deskripsi)
    VALUES ('$id_hutang','','$tgl_transaksi_htng','$jumlah_hutang','$deskripsi')");

    if($query && $query2)
    {
        ?>
            <script language="javascript">
              alert("Data transaksi Hutang baru berhasil disimpan!");
              document.location.href="halaman_hutang.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Data transaksi Hutang baru gagal disimpan!");
              document.location.href="inputhutang.php";
            </script>
        <?php
    }

?>
