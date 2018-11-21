<?php

$mahasiswa = array(
	"nim"=>"",
	"nama_mhs"=>"",
	"tanggal_lahir"=>"",
	"alamat"=>"",
	"jenis_kelamin"=>"",
	"url"=>"proses-mahasiswa.php?aksi=baru"
);

if(isset($_GET["nim"])){
	include("koneksi.php");
	$nim = $_GET['nim'];
	$mahasiswa = mysql_fetch_array(mysql_query("select * from mahasiswa where nim='$nim'"));
	$mahasiswa['url'] = "proses-mahasiswa.php?aksi=ubah&nim=$nim";
}

?>

<div class="form-center">
	<h3>Form mahasiswa</h3>
	<form action="<?php echo $mahasiswa['url']; ?>" method="POST">
			
		<div class="form-component">
			<label class="label-form">nim</label>
			<input value="<?php echo $mahasiswa['nim']; ?>" type="number" size="20" name="nim" max="999999999999" required/>
		</div>
		
		<div class="form-component">
			<label class="label-form">Nama mahasiswa</label>
			<input value="<?php echo $mahasiswa['nama_mhs']; ?>" type="text" size="30" name="nama_mhs" maxlength="50" required/>
		</div>
		
		<div class="form-component">
			<label class="label-form">Tanggal Lahir</label>
			<input value="<?php echo $mahasiswa['tanggal_lahir']; ?>" type="text" size="30" name="tanggal_lahir" maxlength="50" required/>
		</div>
		
		<div class="form-component">
			<label class="label-form">Alamat</label>
			<textarea name="alamat"><?php echo $mahasiswa['alamat']; ?></textarea>
		</div>
		
		<div class="form-component">
			<label class="label-form">Jenis Kelamin</label>
			<input type="radio" name="jenis_kelamin" value="Laki-laki" 
				<?php if($mahasiswa['jenis_kelamin']=="Laki-laki"){echo 'checked';} ?> />
			Laki-laki
			<input type="radio" name="jenis_kelamin" value="Perempuan" 
				<?php if($mahasiswa['jenis_kelamin']=="Perempuan"){echo 'checked';} ?> />
			Laki-laki
		</div>
		
		<div class="form-component">
			<input type="reset" value="Batal" name="reset"/>
			<input type="submit" value="Simpan" name="submit"/>
		</div>
		
	</form>
</div>