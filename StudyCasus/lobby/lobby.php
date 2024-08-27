<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
</head>
<body>
    <section id="table">
        <div class="more">
            <table class="table border table table-striped table-hover">
                <thead>
                    <tr class="to-tabel-kolom table-primary text-center">
                        <th>Id</th>
                        <th>Nama</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi/koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_produk");
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                    <tr class="to-tabel table-light text-center">
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['id_kategori']; ?></td>
                        <td>
                            <a href="../method/edit/view-edit.php?id=<?php echo $d['id']; ?>">edit</a>
                        </td>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>