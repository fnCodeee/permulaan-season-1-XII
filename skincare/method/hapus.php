<?php 
include 'koneksi-app.php'; // Pastikan ini berisi koneksi database

// Cek apakah parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Amankan ID dengan casting ke integer

    // Persiapkan query SQL untuk menghapus data
    $sql = "DELETE FROM tb_siswa WHERE id = ?";
    
    if ($stmt = $koneksi->prepare($sql)) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Terjadi kesalahan saat menghapus data.";
        }
        $stmt->close();
    } else {
        echo "Kesalahan dalam persiapan statement.";
    }

    $koneksi->close();
} else {
    echo "ID tidak ditemukan.";
}

header("location:http://localhost/faizRPL_php_Projeck/Buat-daftar_siswa.php/table-lobby.php");  

?>
