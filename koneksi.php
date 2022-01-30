<?php
$koneksi = mysqli_connect("localhost", "root", "", "uas_202055202102");

if (mysqli_connect_errno()) {
	echo "koneksi Database Gagal:".mysqli_connect_errno();
}

?>