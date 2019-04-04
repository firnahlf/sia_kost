<?php
include "../include/koneksi.php";


//tampung data
$id_jurnal=$_POST['id_jurnal'];
$id_transaksi = $_POST['id_transaksi'];
$id_akun = $_POST['id_akun'];
$tanggal = $_POST['tanggal'];
$debit = $_POST['debit'];
$kredit = $_POST['kredit'];


    $query = mysqli_query($koneksi, "INSERT INTO jurnal_umum (id_jurnal, id_transaksi, id_akun, tanggal, debit, kredit)
    VALUES('$id_jurnal', '$id_transaksi', '$id_akun', '$tanggal', '$debit', '$kredit')");

    if($query)
    {
        ?>
            <script language="javascript">
              alert("Data jurnal baru berhasil disimpan!");
              document.location.href="index_akuntan.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
              alert("Data jurnal baru gagal disimpan!");
              document.location.href="input_jurnal.php";
            </script>
        <?php
    }

?>
