<?php
include 'koneksi-app.php';

// Ambil id dari query string
$id = $_GET['id'];

// Ambil data dari database berdasarkan id
$query = "SELECT * FROM skincare WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

// Jika data tidak ditemukan
if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Skincare</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
        <br>
        <label for="id_kategori">ID Kategori:</label>
        <input type="text" id="id_kategori" name="id_kategori" value="<?php echo htmlspecialchars($data['id_kategori']); ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
