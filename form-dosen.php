<?php

$dosen = array(
	"nik"=>"",
	"nama_dosen"=>"",
	"url"=>"proses-dosen.php?aksi=baru"
);

if(isset($_GET["nik"])){
	include("koneksi.php");
	$nik = $_GET['nik'];
	$dosen = mysql_fetch_array(mysql_query("select * from dosen where nik='$nik'"));
	$dosen['url'] = "proses-dosen.php?aksi=ubah&nik=$nik";
}

?>

<div class="form-center">
	<h3>Form Dosen</h3>
	<form action="<?php echo $dosen['url']; ?>" method="POST">
			
		<div class="form-component">
			<label class="label-form">NIK</label>
			<input value="<?php echo $dosen['nik']; ?>" type="number" size="20" name="nik" max="999999999999" required/>
		</div>
		
		<div class="form-component">
			<label class="label-form">Nama Dosen</label>
			<input value="<?php echo $dosen['nama_dosen']; ?>" type="text" size="30" name="nama_dosen" maxlength="50" required/>
		</div>
		
		<div class="form-component">
			<input type="reset" value="Batal" name="reset"/>
			<input type="submit" value="Simpan" name="submit"/>
		</div>
		
	</form>
</div>