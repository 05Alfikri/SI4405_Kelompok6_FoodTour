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
$query = "SELECT * FROM showroom_alfikri_table where id_mobil ='$id_mobil'";
$show = mysqli_query($connect, $query);
while ($data = mysqli_fetch_array($show)) {
?>

  <div class="container mt-5 mb-5">
    <form>
      <div class="row">

        <div class="col">
          <div class="d-flex align-items:center mt-2">
            <img src="../assets/images/uploaded/<?php echo $data['foto_mobil']; ?>" class="card-img-top">
          </div>
        </div>

        <div class="col">
          <form class="mt-5" style="margin-right:250px">
            <div class="mb-3">
              <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
              <input type="text" class="form-control" name="nama_mobil" value="<?php echo $data['nama_mobil']; ?>"
                readonly>
            </div>
            <div class="mb-3">
              <label for="nama_pemilik" class="form-label fw-bold">Nama Pemilik</label>
              <input type="text" class="form-control" name="nama_pemilik" value="<?php echo $data['pemilik_mobil']; ?>"
                readonly>
            </div>
            <div class="mb-3">
              <label for="merk_mobil" class="form-label fw-bold">Merk</label>
              <input type="text" class="form-control" name="merk_mobil" value="<?php echo $data['merk_mobil']; ?>"
                readonly>
            </div>
            <div class="mb-3">
              <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
              <input type="date" class="form-control" name="tanggal_beli" value="<?php echo $data['tanggal_beli']; ?>"
                readonly>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
              <textarea class="form-control" name="deskripsi" rows="3"
                readonly><?php echo $data['deskripsi']; ?></textarea>
            </div>
            <div>
              <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
              <div class="mb-5 px-2">
                <input class="form-check-input" type="radio" name="status_pembayaran"
                  value="<?php echo $data['tanggal_beli']; ?>">
                <label class="form-check-label" for="lunas">
                  <?php echo $data['status_pembayaran']; ?>
                </label>
              </div>
              <a href="../pages/edit-alfikri.php?id_mobil=<?php echo $data['id_mobil']; ?>" class="btn btn-primary"
                style="width:150px;">Edit</a>
          </form>

        </div>
      </div>
  </div>

  <?php } ?>

</body>

</html>