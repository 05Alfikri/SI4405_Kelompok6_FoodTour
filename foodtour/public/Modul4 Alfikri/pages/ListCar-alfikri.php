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
            <a class="nav-link active" href="ListCar-alfikri.php">MyCar</a>
          </li>
        </ul>
      </div>

      <div class="add-car">
        <a href="add-alfikri.php" class="btn btn-light text-primary">Add Car</a>
      </div>
    </div>
  </nav>

  <div class="container my-4">
    <div class="title">
      <h3 class="fw-bold">My Show Room</h3>
      <p class="text-secondary">List Show Room Alfikri - 1202204169</p>
    </div>
    <?php
      include '../config/connector.php';
      $query = "SELECT * FROM showroom_alfikri_table ORDER BY id_mobil ASC";
      $show = mysqli_query($connect, $query);
      while ($data = mysqli_fetch_array($show)) {
      ?>
    <div class="col">
      <div class="card mt-2" style="width: 18rem;margin-bottom:25px;">
        <img src="../assets/images/uploaded/<?php echo $data['foto_mobil']; ?>" class="card-img-top"
          style="min-height:200px;">
        <div class="card-body" style="max-height:200px;">
          <h5 class="card-title">
            <?php echo $data['nama_mobil']; ?>
          </h5>
          <p class="card-text">
            <?php echo $data['deskripsi']; ?>
          </p>
          <div class="container px-5">
            <a href="../pages/detail-alfikri.php?id_mobil=<?php echo $data['id_mobil']; ?>"
              class="btn btn-primary">Detail</a>
            <a href="../config/delete.php?id_mobil=<?php echo $data['id_mobil']; ?>" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <?php

    $carData = mysqli_query($connect, "SELECT * FROM showroom_alfikri_table");
    $countCar = mysqli_num_rows($carData);

    ?>
  <div class="container mt-5">
    <p>Jumlah Mobil :
      <?php echo "$countCar" ?>
    </p>
  </div>
  </div>


</body>

</html>