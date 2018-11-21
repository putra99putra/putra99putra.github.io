<?php
//Cek parameter get aksi
if(!isset($_GET['aksi'])){
	echo'
		<script>
			alert("Anda dilarang mengakses halaman ini !");
			window.location="./index.php?halaman=perkuliahan";
		</script>
	';
}

//Mengambil value parameter get aksi bila parameter aksi di temukan
$aksi=$_GET['aksi'];

//Include file script koneksi database
include("koneksi.php");

/*==========================================
SCRIPT SIMPAN DATA perkuliahan BARU
============================================*/
//Jika aksi = baru
if($aksi=="baru"){
	if(isset($_POST['submit'])){
		
		$kode_mk = $_POST['kode_mk'];
		$nim = $_POST['nim'];
		$nik = $_POST['nik'];
		$nilai = $_POST['nilai'];
		
		$querySQL = mysql_query("INSERT INTO perkuliahan VALUES ('','$kode_mk','$nim','$nik','$nik')");
				
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=perkuliahan";
			</script>
		';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=perkuliahan";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=perkuliahan";
			</script>
		';
	}
	
}

/*==========================================
SCRIPT HAPUS DATA perkuliahan BERDASARKAN kode_mk
============================================*/
if($aksi=="hapus"){
	if(isset($_GET['id'])){
		$kode_mk = $_GET['id'];
		$querySQL = mysql_query("delete from perkuliahan where id_perkuliahan='$id'");
		if($querySQL){
			//berhasil
			echo'
				<script>
					alert("Data berhasil dihapus !");
					window.location="./index.php?halaman=perkuliahan";
				</script>
			';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal dihapus !");
					window.location="./index.php?halaman=perkuliahan";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Parameter nik tidak ditemukan !");
				window.location="./index.php?halaman=perkuliahan";
			</script>
		';
	}
}


/*==========================================
SCRIPT UPDATE DATA perkuliahan BARU
============================================*/
//Jika aksi = ubah
if($aksi=="ubah"){
	if(isset($_POST['submit'])){
		
		$id = $_GET['id'];
		$kode_mk = $_POST['kode_mk'];
		$nim = $_POST['nim'];
		$nik = $_POST['nik'];
		$nilai = $_POST['nilai'];
		
		$querySQL = mysql_query("update perkuliahan set kode_mk='$kode_mk',nim='$nim',nik='$nik',nilai='$nilai' where id_perkuliahan='$id'");
		
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=perkuliahan";
			</script>
			';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=perkuliahan";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=perkuliahan";
			</script>
		';
	}
	
}











