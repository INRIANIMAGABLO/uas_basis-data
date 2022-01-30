 <?php
include"koneksi.php";
$id= $_GET['id'];
$data= mysqli_query($koneksi,"SELECT * FROM uas_202055202102 where nim='$id'");
while ($hasil= mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mengubah Data Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data</h1>
	<form method="post" action="">
		<label>Nim</label><br>
		<input type="text" name="nim" value="<?php echo $hasil['nim'];?>" readonly><br>
		<label>Nama</label><br>
		<input type="text" name="nama" value="<?php echo $hasil['nama'];?>"><br>
		<label>Alamat</label><br>
		<input type="text" name="alamat" value="<?php echo $hasil['alamat'];?>"><br>
		<label>Jenis kelamin</label><br>
		<input type="text" name="jenis_kelamin" value="<?php echo $hasil['jenis_kelamin'];?>"><br>
		<button type="submit" name="simpan">Simpan</button> || <button><a href="index.php">Kembali</a></button>
	</form>
	<?php
	}
	?>
</body>
</html>
<?php
include"koneksi.php";

if(isset($_POST['simpan'])){
	$nim= $_POST['nim'];
	$nama= $_POST['nama'];
	$alamat= $_POST['alamat'];
	$jenis_kelamin= $_POST['jenis_kelamin'];

	$sql  = "UPDATE uas_202055202102 SET nim='$nim', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE nim='$nim'";

	if(mysqli_query($koneksi,$sql)){

		header('location:index.php');
	}else{

		echo "Maaf Proses Penyimpanan Data Tidak Berhasil";
	}
}

?>
