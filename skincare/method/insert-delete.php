<?php 
    include 'koneksi-app.php';

    $id_siswa = $_POST['id'];
    
    // Error --> Karena id adalah primary jadi tidak boleh sama, kalo sama bakal error
    mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id = $id_siswa");
    header("location:http://localhost/faizRPL_php_Projeck/Buat-daftar_siswa.php/table-lobby.php");  

    
?>


<html>
<body>
    <!-- Php dari AI -->
     <!-- // Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

// Memeriksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Contoh query DELETE
$id_to_delete = 1;
$result = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id = $id_to_delete;");

// Memeriksa hasil query DELETE
if ($result) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error saat menjalankan query: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
 -->
</body>
</html>