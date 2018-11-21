<?php
//Cek parameter get aksi
if(!isset($_GET['aksi'])){
	echo'
		<script>
			alert("Anda dilarang mengakses halaman ini !");
			window.location="./index.php?halaman=mahasiswa";
		</script>
	';
}

//Mengambil value parameter get aksi bila parameter aksi di temukan
$aksi=$_GET['aksi'];

//Include file script koneksi database
include("koneksi.php");

/*==========================================
SCRIPT SIMPAN DATA mahasiswa BARU
============================================*/
//Jika aksi = baru
if($aksi=="baru"){
	if(isset($_POST['submit'])){
		
		$nim = $_POST['nim'];
		$nama_mhs = $_POST['nama_mhs'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat= $_POST['alamat'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		
		$querySQL = mysql_query("insert into mahasiswa values('$nim','$nama_mhs','$tanggal_lahir','$alamat','$jenis_kelamin')");
		
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=mahasiswa";
			</script>
		';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=mahasiswa";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=mahasiswa";
			</script>
		';
	}
	
}

/*==========================================
SCRIPT HAPUS DATA MAHASISWA BERDASARKAN NIM
============================================*/
if($aksi=="hapus"){
	if(isset($_GET['nim'])){
		$nim = $_GET['nim'];
		$querySQL = mysql_query("delete from mahasiswa where nim='$nim'");
		if($querySQL){
			//berhasil
			echo'
				<script>
					alert("Data berhasil dihapus !");
					window.location="./index.php?halaman=mahasiswa";
				</script>
			';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal dihapus !");
					window.location="./index.php?halaman=mahasiswa";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Parameter nik tidak ditemukan !");
				window.location="./index.php?halaman=mahasiswa";
			</script>
		';
	}
}


/*==========================================
SCRIPT UPDATE DATA mahasiswa BARU
============================================*/
//Jika aksi = ubah
if($aksi=="ubah"){
	if(isset($_POST['submit'])){
		
		$nimlama = $_GET['nim'];
		$nimbaru = $_POST['nim'];
		$nama_mhs = $_POST['nama_mhs'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat= $_POST['alamat'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		
		$querySQL = mysql_query("update mahasiswa set nim='$nimbaru',nama_mhs='$nama_mhs',tanggal_lahir='$tanggal_lahir',alamat='$alamat',jenis_kelamin='$jenis_kelamin' where nim='$nimlama'");
		
		if($querySQL){
			//berhasil
			echo'
			<script>
				alert("Data berhasil disimpan !");
				window.location="./index.php?halaman=mahasiswa";
			</script>
			';
		}
		else{
			//gagal
			echo'
				<script>
					alert("Data gagal disimpan !");
					window.location="./index.php?halaman=mahasiswa";
				</script>
			';
		}
	}
	else{
		echo'
			<script>
				alert("Data tidak ditemukan !");
				window.location="./index.php?halaman=mahasiswa";
			</script>
		';
	}
	
}











