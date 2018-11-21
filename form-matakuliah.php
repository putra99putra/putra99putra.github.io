<?php

$matakuliah = array(
	"kode_mk"=>"",
	"nama_mk"=>"",
	"sks"=>"",
	"url"=>"proses-matakuliah.php?aksi=baru"
);

if(isset($_GET["kdmk"])){
	include("koneksi.php");
	$kdmk = $_GET['kdmk'];
	$matakuliah = mysql_fetch_array(mysql_query("select * from matakuliah where kode_mk='$kdmk'"));
	$matakuliah['url'] = "proses-matakuliah.php?aksi=ubah&kdmk=$kdmk";
}

?>

<div class="form-center">
	<h3>Form Matakuliah</h3>
	<form action="<?php echo $matakuliah['url']; ?>" method="POST">
			
		<div class="form-component">
			<label class="label-form">Kode MK</label>
			<input value="<?php echo $matakuliah['kode_mk']; ?>" type="text" size="20" name="kode_mk" required/>
		</div>
		
		<div class="form-component">
			<label class="label-form">Nama Matakuliah</label>
			<input value="<?php echo $matakuliah['nama_mk']; ?>" type="text" size="50" name="nama_mk" maxlength="80" required/>
		</div>
		
		<div class="form-component">
			<label class="label-form">SKS</label>
			<input value="<?php echo $matakuliah['sks']; ?>" type="text" size="10" name="sks" maxlength="20" required/>
		</div>
	
		<div class="form-component">
			<input type="reset" value="Batal" name="reset"/>
			<input type="submit" value="Simpan" name="submit"/>
		</div>
		
	</form>
</div>