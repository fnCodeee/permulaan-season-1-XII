<?php 
include "../../koneksi/koneksi.php";

$id = $_GET['id'];
 
$query = mysqli_query($koneksi, "SELECT nama,id_kategori FROM tb_produk WHERE id = $id");
   
$select = mysqli_fetch_array($query);

$nama = $select['nama'];
$id_kategori = $select['id_kategori'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit-query.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Id</label>
          <input value="<?php echo $id ?>" name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input value="<?php echo $nama ?>" name="nama" type="text" class="form-control" id="nameInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Id Kategori</label>
          <input value="<?php echo $id_kategori ?>" name="id_kategori" type="text" class="form-control" id="nameInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="button-submit-classMine">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</body>
</html>