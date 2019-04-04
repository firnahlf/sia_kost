<?php
session_start();
session_destroy();
echo "<script>alert('Terimakasih telah menggunakan Sistem Informasi Akuntansi ini!'); window.location = 'index.php'</script>";
?>
