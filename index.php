<?php
session_start();
if(isset($_SESSION['isLoginAkademik'])){
	if(!$_SESSION['isLoginAkademik']){
		header("Location:./login.php");
	}
}
else{
	header("Location:./login.php"); //redirect to login
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>SISTEM INFORMASI AKADEMIK</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1 class="title">Sistem Informasi Akademik</h1>
				<span class="sub-title"></span>
			</div>
			<div class="navbar">
				<ul>
					<li> <a href="index.php">Beranda</a> </li>
					<li> <a href="index.php?halaman=dosen">Dosen</a> </li>
					<li> <a href="index.php?halaman=mahasiswa">Mahasiswa</a> </li>
					<li> <a href="index.php?halaman=matakuliah">Matakuliah</a> </li>
					<li> <a href="index.php?halaman=perkuliahan">Perkuliahan</a> </li>
					<li> <a href="keluar.php">Keluar</a> </li>
				</ul>
			</div>
			<div class="box-content">
				<?php 
					if(isset($_GET['halaman'])){
						$halaman = $_GET['halaman'].".php";
						if(file_exists($halaman)){
							include($halaman);
						}
						else{
							include("beranda.php");
						}
					}
					else{
						include("beranda.php");
					}
				?>
			</div>
			<div class="footer">
				<span class="sub-title">
					Copyright&copy;siakad online
				</span>
			</div>
		</div>
	</body>
</html>