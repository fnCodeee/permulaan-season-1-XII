<?php
include 'koneksi-app.php'; // Pastikan ini berisi koneksi ke database

// Cek apakah parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Amankan ID dengan casting ke integer

    // Persiapkan query SQL untuk menghapus data
    $sql = "DELETE FROM tb_produk WHERE id = ?";

    // Siapkan statement
    if ($stmt = $koneksi->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute(); // Jalankan statement
        $stmt->close(); // Tutup statement
    }

    // Tutup koneksi
    $koneksi->close();

    // Set pesan sukses
    $message = "Data berhasil dihapus.";
} else {
    // Jika ID tidak ada, set pesan kesalahan
    $message = "ID tidak ditemukan.";
}

// Tampilkan alert menggunakan JavaScript
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penghapusan</title>
</head>
<body>
    <script type="text/javascript">
        alert("<?php echo $message; ?>");
        // Redirect ke halaman setelah alert
        window.location.href = "http://localhost/faizRPL_php_Projeck/skincare/table-lobby.php";
    </script>  
</body>
</html>
