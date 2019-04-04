<?php
include "../include/koneksi.php";

$id_jurnal = $_GET['id_jurnal'];

$query ="SELECT * FROM jurnal_umum where id_jurnal ='$id_jurnal'";
$hasil =mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0 )
{
    $data =mysqli_fetch_array($hasil);

    //delete data di database
    $query = mysqli_query($koneksi, "DELETE FROM jurnal_umum where id_jurnal='$id_jurnal'");

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data jurnal berhasil dihapus!");
                document.location.href="data_jurnal.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data jurnal gagal dihapus!");
                document.location.href="data_jurnal.php";
            </script>
        <?php
    }
}
?>
