<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lobby</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
  
  <!-- Style -->
  <style>
    *, html, body {
      margin: 0;
      padding: 0;
    }
    /* Gambar di navbar */
    #image-mark-navbar{
      width: 100%;
      height: auto;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    } 


    /* new navbar*/
    .box-navbar {
      text-align: center;
      margin: 24px 0;
    } .mark-navbar {
      background: #e5e5e5;
      background: linear-gradient(to bottom, transparent, transparent, #e5f0fa);
    }

    /* table input */
    #table-input {
      width: 100%;
      height: auto;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      /* margin-top: 64px; */
    } 
    .batas-stand {
      background:
                  linear-gradient(to top, rgba(3,14,27,0),rgba(3,14,27,0.2), rgba(3,14,27,0)),
                  linear-gradient(to top, rgba(255, 255, 255, 0), rgba(255,255,255,0.35), rgba(255,255,255,0));
      height: 80%;
      width: 1.4px;
      margin: auto 3.5px;
    }
    .href-tambah-data {
      width: 100%;
      height: auto;
      background-color: #f7f5f2;
      display: flex;
      justify-content: end;
      color: #000;
      margin-bottom: 24px;
      padding:0 64px;
    } 
    .list-none, .href-edit, .href-hapus{
      text-decoration: none;
      color: inherit;
      transition: all linear 0.2s;
    }
    .anak-href:hover {
      color: #123499;
      transform: scale(1.1);
      transition: all linear 0.2s;
    }
    .anak-href {
      margin: 0;
      padding:0 8px;
    }
      /* masuk box-tabel  */

      .box-tabel {
        width: 900px;
        height: auto;
      }
      .menu-more > a{
        padding: 0 12px;
      }
      .href-hapus:hover {
        color: red;
      } .href-edit:hover {
        color: blue;
      }

  </style>
</head>

<body class="row">
  <section id="image-mark-navbar" class="mark-navbar col">
    <!-- image -->
    <!-- <div class="box-gambar">
      <img src="" alt="" class="buah-gambar col">
    </div> -->

    <!-- Navbar -->
    <div class="box-navbar">
      <h1>Data Siswa</h1>
    </div>
  </section>

  <!-- Table input -->
  <section id="table-input" class="">
    <div class="href-tambah-data shadow-sm">
      <div class="batas-stand"></div>
      <div class="anak-href">
        <a class="list-none" href="tambah-input-siswa.php">
          <p class="href-edit my-3 mx-4 fs-5 fw-semibold">Daftar</p>
        </a>
      </div>
      <div class="batas-stand"></div>
      <div class="anak-href">
        <a class="list-none delete" href="delete-kolom.php">
          <p class="href-hapus my-3 mx-4 fs-5 fw-semibold">Hapus</p>
        </a>
      </div>
      <div class="batas-stand"></div>
    </div>
    <div class="container d-flex box-tabel">
      <div id="barisan-tabel" class="col mx-6">
        <table class="table border table table-striped table-hover">
          <thead>
            <tr class="to-tabel-kolom table-primary text-center">
              <th class="col-2" scope="col">id Produk</th>
              <th class="col-4" scope="col">Nama Produk</th>
              <th class="col-3" scope="col">Kategori</th>
              <th class="col-3" scope="col">More</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'method/koneksi-app.php';
            $data = mysqli_query($koneksi, "SELECT * FROM tb_produk");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr class="to-tabel table-light text-center">
                <td class="border"><?php echo $d['id']; ?></td>
                <td class="border"><?php echo $d['nama']; ?></td>
                <td class="border"><?php echo $d['id_kategori']; ?></td>
                <td class="border menu-more text-center table-">
                  <a class="href-edit mx-6 fw-medium mx-2" method="post" href="method/edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                  <a class="href-hapus mx-6 fw-medium mx-2" href="method/hapus-data-AI.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
                <!-- +FITUR HAPUS & EDIT -->
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- end tab -->
</body>

</html>