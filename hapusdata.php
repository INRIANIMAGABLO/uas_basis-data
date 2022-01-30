<?php
include"koneksi.php";
$id= $_GET['id'];
$data= mysqli_query($koneksi,"DELETE FROM uas_202055202102 where nim='$id'");

if($data){
    header('location:index.php');
}else{
    echo "Maaf Proses Mengubah Tidak Berhasil";

}
?>