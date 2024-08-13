<?php
include 'koneksi-app.php';

$id_siswa = $_POST['id'];
$nama_siswa = $_POST['nama'];
$jurusan_siswa = $_POST['id_kategori'];

// Error --> Karena id adalah primary jadi tidak boleh sama, kalo sama bakal error
mysqli_query($koneksi,"INSERT INTO tb_produk VALUES('$id_siswa', '$nama_siswa', '$jurusan_siswa')");
header("location:http://localhost/faizRPL_php_Projeck/skincare/table-lobby.php");  
?>