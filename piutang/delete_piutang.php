<?php
include "../include/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == "GET"){ //menerima request dgn metode GET

  $id = $_GET['id_piutang']; //parameter id dari url disimpan ke $id
  $query= mysqli_query($koneksi, "DELETE FROM piutang WHERE id_piutang='$id'"); //delete entri berdasar id

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data piutang berhasil dihapus!");
                document.location.href="halaman_piutang.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data piutang gagal dihapus!");
                document.location.href="halaman_piutang.php";
            </script>
        <?php
    }
}
?>
