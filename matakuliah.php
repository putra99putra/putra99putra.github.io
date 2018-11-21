<table cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<td colspan="4">
				<button onclick="window.location='./index.php?halaman=form-matakuliah'">
					Tambah Matakuliah
				</button>
			</td>
		</tr>
		<tr>
			<th width="100px">Kode MK</th>
			<th width="150px">Nama Mata Kuliah</th>
			<th width="100px">SKS</th>
			<th width="100px">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include("koneksi.php");
			$query=mysql_query("select * from matakuliah");
			while($row=mysql_fetch_array($query)){
				echo'
					<tr>
						<td>'.$row['kode_mk'].'</td>
						<td>'.$row['nama_mk'].'</td>
						<td>'.$row['sks'].'</td>
						<td>';
						?>
		<button onclick="edit('<?php echo $row['kode_mk'];?>');">EDIT</button>
		<button onclick="hapus('<?php echo $row['kode_mk'];?>');">HAPUS</button>
						<?php 
						echo'
						</td>
					</tr>
				';
			}
		?>
	</tbody>
</table>

<script>

	function hapus(kdmk) {
		if (confirm("Apakah anda yakin ingin menghapus matakuliah dengan kode matakuliah = "+kdmk+" ?")) {
			window.location = 'proses-matakuliah.php?aksi=hapus&kdmk='+kdmk;
		}
	}
	
	function edit(kdmk) {
		window.location = './index.php?halaman=form-matakuliah&kdmk='+kdmk;
	}
	
</script>








