<table cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<td colspan="4">
				<button onclick="window.location='./index.php?halaman=form-perkuliahan'">
					Tambah Perkuliahan
				</button>
			</td>
		</tr>
		<tr>
			<th>No</th>
			<th width="150px">Nama Mahasiswa</th>
			<th width="150px">Nama Mata Kuliah</th>
			<th width="150px">Nama Dosen</th>
			<th width="100px">Nilai</th>
			<th width="100px">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$i=0;
			include("koneksi.php");
			$query=mysql_query("select * from perkuliahan,mahasiswa,matakuliah,dosen where 
			perkuliahan.nim=mahasiswa.nim and perkuliahan.nik=dosen.nik and 
			perkuliahan.kode_mk=matakuliah.kode_mk");
								
			while($row=mysql_fetch_array($query)){
				$i++;
				echo'
					<tr>
						<td>'.$i.'</td>
						<td>'.$row['nama_mhs'].'</td>
						<td>'.$row['nama_mk'].'</td>
						<td>'.$row['nama_dosen'].'</td>
						<td>'.$row['nilai'].'</td>
						<td>
							<button onclick="edit('.$row['id_perkuliahan'].');">EDIT</button>
							<button onclick="hapus('.$row['id_perkuliahan'].');">HAPUS</button>
						</td>
					</tr>
				';
			}
		?>
	</tbody>
</table>

<script>

	function hapus(id) {
		if (confirm("Apakah anda yakin ingin menghapus perkuliahan dengan id perkuliahan = "+id+" ?")) {
			window.location = 'proses-perkuliahan.php?aksi=hapus&id='+id;
		}
	}
	
	function edit(id) {
		window.location = './index.php?halaman=form-perkuliahan&id='+id;
	}
	
</script>








