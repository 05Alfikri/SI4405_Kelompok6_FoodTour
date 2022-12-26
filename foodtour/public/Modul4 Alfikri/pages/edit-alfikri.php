<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style/style.css">

  <title>Home</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="home-alfikri.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ListCar-alfikri.php">MyCar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
    include '../config/connector.php';

    $id_mobil = $_GET['id_mobil'];
    $sql = "SELECT * FROM showroom_alfikri_table where id_mobil ='$id_mobil'";
    $tampilData = mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_array($tampilData)) {
    ?>

  <div class="container mt-5 px-3" style="margin-bottom:100px">
    <h3 class="fw-bold">Ubah Data Mobil</h3>
    <p>Ubah Data Mobil Anda</p>
    <form action="../config/edit.php?id_mobil=<?php echo $data['id_mobil']; ?>" method="POST" class="mt-5"
      style="margin-right:250px" enctype="multipart/form-data">
    
      <div class="mb-3">
        <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
        <input type="text" class="form-control" name="nama_mobil" placeholder="Silahkan masukan nama mobilmu!"
          value="<?php echo $data['nama_mobil']; ?>">
      </div>
      
      <div class="mb-3">
        <label for="pemilik_mobil" class="form-label fw-bold">Pemilik Mobil</label>
        <input type="text" class="form-control" name="pemilik_mobil" placeholder="Silahkan masukan nama mobilmu!"
          value="<?php echo $data['pemilik_mobil']; ?>">
      </div>
   
      <div class="mb-3">
        <label for="merk_mobil" class="form-label fw-bold">Merk Mobil</label>
        <input type="text" class="form-control" name="merk_mobil" placeholder="Silahkan masukan nama mobilmu!"
          value="<?php echo $data['merk_mobil']; ?>">
      </div>
 
      <div class="mb-3">
        <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli Mobil</label>
        <input type="date" class="form-control" name="tanggal_beli" placeholder=""
          value="<?php echo $data['tanggal_beli']; ?>">
      </div>
   
      <div class="mb-3">
        <label for="deskripsi" class="form-label fw-bold">Deskripsi Mobil</label>
        <textarea class="form-control" name="deskripsi" rows="3"
          placeholder="Contoh: Mobil ini adalah yang terbaik dimasanya ..."><?php echo $data['deskripsi']; ?></textarea>
      </div>
    
      <div class="mb-3">
        <label for="foto" class="form-label fw-bold">Foto</label>
        <input type="file" name="foto" class="form-control">
      </div>
   
      <div class="mb-5 px-2">
        <input class="form-check-input" type="radio" name="status_pembayaran" value="lunas">
        <label class="form-check-label" for="lunas">Lunas</label>
        <input class="form-check-input ms-5" type="radio" name="status_pembayaran" value="belum lunas">
        <label class="form-check-label" for="lunas">Belum Lunas</label>
      </div>
      <button type="submit" value="submit" name="submit" class="btn btn-primary">Selesai</button>
    </form>
  </div>

  <?php } ?>
</body>

</html>