<!DOCTYPE html>
<html>
<head>
	<title>Menambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form method="post" action="tambahdata.php">
		<label >Nim</label><br>
		<input type="text" name="nim"><br>
		<label>Nama</label><br>
		<input type="text" name="nama"><br>
		<label>Alamat</label><br>
		<input type="text" name="alamat"><br>
		<label>Jenis kelamin</label><br>
		<input type="text" name="jenis_kelamin"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">Kembali</a></button>
	</form>
</body>
</html>