<?php
include "../include/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == "GET"){ //menerima request dgn metode GET

  $id = $_GET['id_hutang']; //parameter id dari url disimpan ke $id
  $query= mysqli_query($koneksi, "DELETE FROM hutang WHERE id_hutang='$id'"); //delete entri berdasar id

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data hutang berhasil dihapus!");
                document.location.href="halaman_hutang.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data hutang gagal dihapus!");
                document.location.href="halaman_hutang.php";
            </script>
        <?php
    }
}
?>
