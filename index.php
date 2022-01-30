 <!DOCTYPE html>
 <html>
 <head>
 	<title>	Menampilkan Data Mahasiswa</title>
 </head>
 <body>
 	<h1 style="font-family: serif; background-color: darkgray; text-align: center;">Menampilkan Data Mahasiswa</h1>
 	<button style="background-color: darkgray; margin-bottom: 6px;"><a href ="formdata.php">Tambah</a></button>
 	<table border="1" align="center" >
 		<tr bgcolor="white">
 			<th bgcolor="darkgray">No</th>
 			<th>Nim</th>
 			<th bgcolor="darkgray">Nama</th>
 			<th>Alamat</th>
 			<th bgcolor="darkgray">Jenis kelamin</th>
 			<th>Opsi</th>
 		</tr>
 		<?php
 			include"koneksi.php";

 			$no =1;
 			$data= mysqli_query($koneksi,"SELECT * FROM uas_202055202102");
 			while ($hasil= mysqli_fetch_array($data)) {
 				?>
 			<tr>
 				<td bgcolor="darkgray"><?php echo $no++; ?></td>
 				<td><?php echo $hasil['nim'] ; ?></td>
 				<td bgcolor="darkgray"><?php echo $hasil['nama'] ; ?></td>
 				<td><?php echo $hasil['alamat'] ; ?></td>
 				<td bgcolor="darkgray"><?php echo $hasil['jenis_kelamin'] ; ?></td>
 				<td>
 					<a href="ubahdata.php?id=<?php echo$hasil['nim'] ?>"> Ubah </a> ||
 					<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="hapusdata.php?id=<?php echo$hasil['nim'] ?>"> Hapus </a>
 			</tr>
 			<?php
 			}
 		?>
 	</table>
 </body>
 