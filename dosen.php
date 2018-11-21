<table cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<td colspan="4">
				<button onclick="window.location='./index.php?halaman=form-dosen'">
					Tambah Dosen
				</button>
			</td>
		</tr>
		<tr>
			<th width="100px">NIK</th>
			<th width="150px">Nama Dosen</th>
			<th width="100px">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include("koneksi.php");
			$query=mysql_query("select * from dosen");
			while($row=mysql_fetch_array($query)){
				echo'
					<tr>
						<td>'.$row['nik'].'</td>
						<td>'.$row['nama_dosen'].'</td>
						<td>
							<button onclick="edit('.$row['nik'].');">EDIT</button>
							<button onclick="hapus('.$row['nik'].');">HAPUS</button>
						</td>
					</tr>
				';
			}
		?>
	</tbody>
</table>

<script>

	function hapus(nik) {
		if (confirm("Apakah anda yakin ingin menghapus dosen dengan nik="+nik+" ?")) {
			window.location = 'proses-dosen.php?aksi=hapus&nik='+nik;
		}
	}
	
	function edit(nik) {
		window.location = './index.php?halaman=form-dosen&nik='+nik;
	}
	
</script>








