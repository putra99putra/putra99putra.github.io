<?php
//Cek parameter get aksi
if(!isset($_GET['aksi'])){
	echo'
		<script>
			alert("Anda dilarang mengakses halaman ini !");
			window.location="./index.php?halaman=matakuliah";
		</script>
	';
}

//Mengambil value parameter get aksi bila parameter aksi di temukan
$aksi=$_GET['aksi'];

//Include file script koneksi database
include("koneksi.php");

/*==========================================
SCRIPT SIMPAN DATA matakuliah BARU
============================================*/
//Jika aksi = baru
if($aksi=="baru"){
	if(isset($_POST['submit'])){
		
		$kode_mk = $_POST['kode_mk'];
		$nama_mk = $_POST['nama_mk'];
		$sks = $_POST['sks'];
		
		$querySQL = mysql_query("insert into matakuliah values('$kode_mk','$nama_mk','$sks')");
		
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=matakuliah";
			</script>
		';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=matakuliah";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=matakuliah";
			</script>
		';
	}
	
}

/*==========================================
SCRIPT HAPUS DATA matakuliah BERDASARKAN kode_mk
============================================*/
if($aksi=="hapus"){
	if(isset($_GET['kdmk'])){
		$kdmk = $_GET['kdmk'];
		$querySQL = mysql_query("delete from matakuliah where kode_mk='$kdmk'");
		if($querySQL){
			//berhasil
			echo'
				<script>
					alert("Data berhasil dihapus !");
					window.location="./index.php?halaman=matakuliah";
				</script>
			';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal dihapus !");
					window.location="./index.php?halaman=matakuliah";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Parameter kode mk tidak ditemukan !");
				window.location="./index.php?halaman=matakuliah";
			</script>
		';
	}
}


/*==========================================
SCRIPT UPDATE DATA matakuliah BARU
============================================*/
//Jika aksi = ubah
if($aksi=="ubah"){
	if(isset($_POST['submit'])){
		
		$kode_mklama = $_GET['kode_mk'];
		$kode_mkbaru = $_POST['kode_mk'];
		$nama_mk = $_POST['nama_mk'];
		$sks = $_POST['sks'];
		
		$querySQL = mysql_query("update matakuliah set kode_mk='$kode_mkbaru',nama_mk='$nama_mk',sks='$sks' where kode_mk='$kode_mklama'");
		
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=matakuliah";
			</script>
			';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=matakuliah";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=matakuliah";
			</script>
		';
	}
	
}











