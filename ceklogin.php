<?php

session_start();

include 'include/koneksi.php';

$akun = $_POST['akun'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where akun='$akun' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);


	if($data['level']=="kasir"){
		$_SESSION['akun'] = $akun;
		$_SESSION['level'] = "kasir";
		header("location:kasir/index_transaksi.php");

	}else if($data['level']=="akunting"){
		$_SESSION['akun'] = $akun;
		$_SESSION['level'] = "akunting";
		header("location:akuntan/index_akuntan.php");

  }else if($data['level']=="administrasi"){
		$_SESSION['akun'] = $akun;
		$_SESSION['level'] = "administrasi";
		header("location:admin/index_admin.php");

	}else if($data['level']=="hutang"){
		$_SESSION['akun'] = $akun;
		$_SESSION['level'] = "pengurus";
		header("location:hutang/halaman_hutang.php");

  }else if($data['level']=="piutang"){
		$_SESSION['akun'] = $akun;
		$_SESSION['level'] = "pengurus";
		header("location:piutang/halaman_piutang.php");

  }else if($data['level']=="kepala_keuangan"){
		$_SESSION['akun'] = $akun;
		$_SESSION['level'] = "kepala_keuangan";
		header("location:keuangan/index_laporan.php");
	}
		?>
		<script language="javascript">
				alert("Selamat Datang di Warkost Sejahtera!");
				document.location.href="index.php";
		</script>
		<?php
		}
		else
		{
		?>
		<script language="javascript">
				alert("Username atau Password Anda salah!");
				document.location.href="index.php";
		</script>
		<?php
		}
		?>
