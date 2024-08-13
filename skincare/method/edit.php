
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $massage ?></h1>

    <form action="method/edit-query.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Id</label>
          <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama produk</label>
          <input name="nama" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">ID Kategori</label>
          <input name="id_kategori" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="button-submit-classMine">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
</body>
</html>