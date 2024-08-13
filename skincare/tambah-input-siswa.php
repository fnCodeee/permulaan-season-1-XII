<?php ?>

<!-- Html  -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      *, html, body {
        padding: 0;
        margin: 0;  
      }
      body {
        width: 100%;
        height: 100vh;  
        background-image: url('img1.jpg');
        background-size: 1300px;
      }
      .kontener {
        width: 40%; 
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        border: 1px solid grey;
        border-radius: 8px;
        padding: 32px 32px 32px 0;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(2px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
      }
      .kontener > form {
        width: 100%;
        height: auto;
        color: white;
      }
      .button-submit-classMine {
        width: 100%;
        height: auto;
        justify-content: right;
      } 
      .label-mark {
        margin: 0 24px;
        padding: 128px 24px;
        backdrop-filter: blur(8px);
        box-shadow: 0px 2px 8px #0096c7;
        /* box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25); */
      }
      .label-mark > h2 {
        font-weight: 600;
      }
    </style>
  </head>
<body>
  <section id="input-form">
    <div class="kontener position-absolute top-50 start-50 translate-middle">
    <div class="label-mark text-light text-center">
      <!-- <h2>INSERT</h2> -->
      <h2>DATA</h2>
      <h2>KELAS</h2>
    </div>
      <form action="method/insert-input.php" method="post">
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
    </div>
  </section>
</body>

</html>