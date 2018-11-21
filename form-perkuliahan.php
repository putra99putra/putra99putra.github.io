<?php
include("koneksi.php");
$perkulihan = array(
	"id_perkuliahan"=>"",
	"kode_mk"=>"",
	"nim"=>"",
	"nik"=>"",
	"nilai"=>"",
	"url"=>"proses-perkuliahan.php?aksi=baru"
);

if(isset($_GET["id"])){
	include("koneksi.php");
	$id = $_GET['id'];
	$perkulihan = mysql_fetch_array(mysql_query("select * from perkuliahan where id_perkuliahan='$id'"));
	$perkulihan['url'] = "proses-perkuliahan.php?aksi=ubah&id=$id";
}

?>

<div class="form-center">
	<h3>Form Perkulihan</h3>
	<form action="<?php echo $perkulihan['url']; ?>" method="POST">
			
		<div class="form-component">
			<label class="label-form">Nama Mahasiswa</label>
			<select name="nim">
				<option value=""></option>
	<?php 
		$queryMhs = mysql_query("select * from mahasiswa");
		while($row=mysql_fetch_array($queryMhs)){
			if($row['nim']==$perkulihan['nim']){
				echo '<option value="'.$row['nim'].'" selected>'.$row['nama_mhs'].'</option>';
			}
			else{
				echo '<option value="'.$row['nim'].'">'.$row['nama_mhs'].'</option>';
			}
			
//echo '<option value="'.$row['nim'].'"'; 
//echo $row['nim']==$perkulihan['nim'] ? "selected" : "";
//echo'>'.$row['nama_mhs'].'</option>';
		}
	?>
			</select>
		</div>
		
		<div class="form-component">
			<label class="label-form">Nama Matakuliah</label>
			<select name="kode_mk">
				<option value=""></option>
				<?php 
					$queryMK = mysql_query("select * from matakuliah");
					while($row=mysql_fetch_array($queryMK)){
						if($row['kode_mk']==$perkulihan['kode_mk']){
							echo '<option value="'.$row['kode_mk'].'" selected>'.$row['nama_mk'].'</option>';
						}
						else{
							echo '<option value="'.$row['kode_mk'].'">'.$row['nama_mk'].'</option>';
						}
					}
				?>
			</select>
		</div>
		
		<div class="form-component">
			<label class="label-form">Nama Dosen</label>
			<select name="nik">
				<option value=""></option>
				<?php 
					$queryDosen = mysql_query("select * from dosen");
					while($row=mysql_fetch_array($queryDosen)){
						if($row['nik']==$perkulihan['nik']){
							echo '<option value="'.$row['nik'].'" selected>'.$row['nama_dosen'].'</option>';
						}
						else{
							echo '<option value="'.$row['nik'].'">'.$row['nama_dosen'].'</option>';
						}
					}
				?>
			</select>
		</div>
		
		<div class="form-component">
			<label class="label-form">Nilai</label>
			<input value="<?php echo $perkulihan['nilai']; ?>" type="text" size="10" name="nilai" maxlength="20" required/>
		</div>
	
		<div class="form-component">
			<input type="reset" value="Batal" name="reset"/>
			<input type="submit" value="Simpan" name="submit"/>
		</div>
		
	</form>
</div>