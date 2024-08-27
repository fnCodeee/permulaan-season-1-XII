<?php 
include "../../koneksi/koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$id_kategori = $_POST['id_kategori'];

mysqli_query($koneksi, "UPDATE tb_produk SET nama='$nama', id_kategori='$id_kategori' WHERE id='$id'");
header("location:http://localhost/faizRPL_php_Projeck/skincare/StudyCasus/lobby/lobby.php");
?>
