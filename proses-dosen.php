<?php
//Cek parameter get aksi
if(!isset($_GET['aksi'])){
	echo'
		<script>
			alert("Anda dilarang mengakses halaman ini !");
			window.location="./index.php?halaman=dosen";
		</script>
	';
}

//Mengambil value parameter get aksi bila parameter aksi di temukan
$aksi=$_GET['aksi'];

//Include file script koneksi database
include("koneksi.php");

/*==========================================
SCRIPT SIMPAN DATA DOSEN BARU
============================================*/
//Jika aksi = baru
if($aksi=="baru"){
	if(isset($_POST['submit'])){
		$nik = $_POST['nik'];
		$nama_dosen = $_POST['nama_dosen'];
		$querySQL = mysql_query("insert into dosen values('$nik','$nama_dosen')");
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=dosen";
			</script>
		';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=dosen";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=dosen";
			</script>
		';
	}
	
}

/*==========================================
SCRIPT HAPUS DATA DOSEN BERDASARKAN NIK
============================================*/
if($aksi=="hapus"){
	if(isset($_GET['nik'])){
		$nik = $_GET['nik'];
		$querySQL = mysql_query("delete from dosen where nik='$nik'");
		if($querySQL){
			//berhasil
			echo'
				<script>
					alert("Data berhasil dihapus !");
					window.location="./index.php?halaman=dosen";
				</script>
			';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal dihapus !");
					window.location="./index.php?halaman=dosen";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Parameter nik tidak ditemukan !");
				window.location="./index.php?halaman=dosen";
			</script>
		';
	}
}


/*==========================================
SCRIPT UPDATE DATA DOSEN BARU
============================================*/
//Jika aksi = ubah
if($aksi=="ubah"){
	if(isset($_POST['submit'])){
		$niklama = $_GET['nik'];
		$nikbaru = $_POST['nik'];
		$nama_dosen = $_POST['nama_dosen'];
		$querySQL = mysql_query("update dosen set nik='$nikbaru',nama_dosen='$nama_dosen' where nik='$niklama'");
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=dosen";
			</script>
		';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=dosen";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=dosen";
			</script>
		';
	}
	
}











