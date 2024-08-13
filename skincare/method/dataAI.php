<?php
// edit.php
include 'koneksi.php'; // Koneksi ke database

$id = $_GET['id'];
$query = "SELECT * FROM pegawai WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die('Data tidak ditemukan!');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>
    <h1>Edit Pegawai</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
        <br>
        <label for="jabatan">Jabatan:</label>
        <input type="text" id="jabatan" name="jabatan" value="<?php echo htmlspecialchars($data['jabatan']); ?>" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
