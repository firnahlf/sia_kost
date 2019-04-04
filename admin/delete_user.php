<?php
include "../include/koneksi.php";
$id =$_GET['id'];

$query ="SELECT * FROM user where id ='$id'";
$hasil =mysqli_query($koneksi, $query);

if (mysqli_num_rows($hasil) > 0 )
{
    $data =mysqli_fetch_array($hasil);

    //delete data di database
    $query = mysqli_query($koneksi, "DELETE FROM user where id='$id'");

    if ($query)
    {
        ?>
            <script language="javascript">
                alert("Data user berhasil dihapus!");
                document.location.href="kelola_user.php";
            </script>
        <?php
    }

    else

    {
        ?>
            <script language="javascript">
                alert("Data user gagal dihapus!");
                document.location.href="kelola_user.php";
            </script>
        <?php
    }
}
?>
