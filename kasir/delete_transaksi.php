<?php
include "../include/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == "GET"){ //menerima request dgn metode GET

  $id = $_GET['id_transaksi']; //parameter id dari url disimpan ke $id
  $query= mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$id'"); //delete entri berdasar id

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data transaksi berhasil dihapus!");
                document.location.href="index_transaksi.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data transaksi gagal dihapus!");
                document.location.href="index_transaksi.php";
            </script>
        <?php
    }
}
?>
