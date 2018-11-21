<table cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<td colspan="4">
				<button onclick="window.location='./index.php?halaman=form-mahasiswa'">
					Tambah Mahasiswa
				</button>
			</td>
		</tr>
		<tr>
			<th width="100px">NIM</th>
			<th width="150px">Nama Mahasiswa</th>
			<th width="100px">Tanggal Lahir</th>
			<th width="120px">Jenis Kelamin</th>
			<th width="250px">Alamat</th>
			<th width="100px">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include("koneksi.php");
			$query=mysql_query("select * from mahasiswa");
			while($row=mysql_fetch_array($query)){
				echo'
					<tr>
						<td>'.$row['nim'].'</td>
						<td>'.$row['nama_mhs'].'</td>
						<td>'.$row['tanggal_lahir'].'</td>
						<td>'.$row['jenis_kelamin'].'</td>
						<td>'.$row['alamat'].'</td>
						<td>
							<button onclick="edit('.$row['nim'].');">EDIT</button>
							<button onclick="hapus('.$row['nim'].');">HAPUS</button>
						</td>
					</tr>
				';
			}
		?>
	</tbody>
</table>

<script>

	function hapus(nim) {
		if (confirm("Apakah anda yakin ingin menghapus mahasiswa dengan nim="+nim+" ?")) {
			window.location = 'proses-mahasiswa.php?aksi=hapus&nim='+nim;
		}
	}
	
	function edit(nim) {
		window.location = './index.php?halaman=form-mahasiswa&nim='+nim;
	}
	
</script>








