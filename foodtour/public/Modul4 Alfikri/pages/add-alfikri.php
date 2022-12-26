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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="../index.php">Home</a>
          <a class="nav-link" href="ListCar-alfikri.php">MyCar</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5 px-3" style="margin-bottom:100px">
    <h3 class="fw-bold">Tambah Mobil</h3>
    <p>Tambah Mobil Baru Anda ke List Show Room</p>
    <form action="../config/insert.php" method="POST" class="mt-5" style="margin-right:250px"
      enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
        <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required>
      </div>

      <div class="mb-3">
        <label for="pemilik_mobil" class="form-label fw-bold">Nama Pemiliki</label>
        <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil" value="alfikri-1202204169"
          required>
      </div>

      <div class="mb-3">
        <label for="merk_mobil" class="form-label fw-bold">Merk Mobil</label>
        <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" required>
      </div>

      <div class="mb-3">
        <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
        <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli" required>
      </div>

      <div class="mb-3">
        <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px" required></textarea>
      </div>

      <div class="mb-3">
        <label for="foto_mobil" class="form-label fw-bold">Foto</label>
        <input type="file" class="form-control" id="foto_mobil" name="foto_mobil" accept="image/*">
      </div>

      <div>
        <label class="form-check-label fw-bold" for="choice">Status Pembayaran</label>
        <div class="mb-3 d-flex gap-4" id="choice">
          <div class="form-check">
            <input class="form-check-input" type="radio" id="lunas" name="status_pembayaran" value="lunas">
            <label class="form-check-label" for="lunas">Lunas</label><br>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" id="notLunas" name="status_pembayaran" value="lunas">
            <label class="form-check-label" for="notLunas">Belum Lunas</label><br>
          </div>
        </div>
      </div>

      <input type="submit" class="btn btn-primary my-5 px-5" name="submit" id="submit" value="Selesai">
    </form>
  </div>
  </div>

</body>

</html>