<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data BUS</title>
</head>
<body>

     <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #bfffbf;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../bus/image/logo.jfif" alt="" width="30" height="24" class="d-inline-block align-text-top">
       Rosalia Indah
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="armada.php">Armada Bus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Booking Online</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sejarah.php">Tentang Rosalia Indah</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar  -->

  <!-- card bus Eksekutif  -->
    <br><br>
    <div class="container-md mt-5">
        <div class="card mb-3" style="height: 28rem;">
            <img src="../bus/image/Capture.JPG" class="card-img-top" alt="..." style="object-fit: cover; height:250px">
            <div class="card-body">
                <h5 class="card-title">Rosalia Indah</h5>
                <hr>
                <p class="card-text mb-0">Kelas : Eksekutif </p>
                <p class="card-text mb-2">Fasilitas : Reclining Seat 2-1(21) | AC | Toilet | LCD TV | Musik | Selimut | Bantal | Foot Rest | Leg Rest | Layanan Makan | Snack | Free Air Mineral | Free Wifi | Layanan Pramugara/i</p>
                <a class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#busEksekutif">Lihat harga</a>
            </div>
        </div>
        <!-- akhir card bus Eksekutif  -->

        <!-- card bus bisnis  -->
        <div class="card mb-3">
            <img src="../bus/image/bisnis.JPG" class="card-img-top" alt="..." style="object-fit: cover; height:250px">
            <div class="card-body">
                <h5 class="card-title">Rosalia Indah</h5>
                <hr>
                <p class="card-text mb-0">Kelas : Bisnis</p>
                <p class="card-text mb-2">Fasilitas : Reclining Seat 2-2(40) | AC | Toilet | LCD TV | Musik | Selimut | Foot Rest | Layanan Makan | Free Air Mineral</p>
                <a class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#busBisnis">Lihat harga</a>
            </div>
        </div>
        <!-- akhir card bus bisnis  -->
        
        <!-- card bus ekonomi  -->
        <div class="card mb-3">
            <img src="../bus/image/ekonomi.JPG" class="card-img-top" alt="..." style="object-fit: cover; height:250px">
            <div class="card-body">
                <h5 class="card-title">Rosalia Indah</h5>
                <hr>
                <p class="card-text mb-0">Kelas : Ekonomi</p>
                <p class="card-text mb-2">Fasilitas : Reclining Seat 2-2(29) | AC | LCD TV | Musik | Snack | Free Air Mineral</p>
                <a class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#busEkonomi">Lihat harga</a>
            </div>
        </div>
    </div>
   <!-- akhir card bus ekonomi -->
   
<!-- modal bus Eksekutif  -->
  <div class="modal" tabindex="-1" id="busEksekutif">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Harga Tiket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-sm">
        <table class="table table-success table-striped pos text-center table-bordered border-success">
            <tr>
                <th>Kelas</th>
                <th>Harga</th>
                <th>Rute</th>
            </tr>
            <tr>
                <td>Eksekutif</td>
                <td>Rp.450.000</td>
                <td>Jabodetabek - Jawa Timur</td>
            </tr>
            </table>
            </div>
      </div>
      <div class="modal-footer">
          <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
          <a href="booking.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal bus Eksekutif  -->

<!-- modal bus bisnis  -->
<div class="modal" tabindex="-1" id="busBisnis">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Harga Tiket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-sm">
        <table class="table table-success table-striped pos text-center table-bordered border-success">
            <tr>
                <th>Kelas</th>
                <th>Harga</th>
                <th>Rute</th>
            </tr>
            <tr>
                <td>Bisnis</td>
                <td>Rp.300.000</td>
                <td>Jabodetabek - Jawa Timur</td>
            </tr>
            </table>
            </div>
      </div>
      <div class="modal-footer">
          <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
          <a href="booking.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal bus bisnis  -->

<!-- modal bus ekonomi  -->
<div class="modal" tabindex="-1" id="busEkonomi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Harga Tiket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-sm">
        <table class="table table-success table-striped pos text-center table-bordered border-success">
            <tr>
                <th>Kelas</th>
                <th>Harga</th>
                <th>Rute</th>
            </tr>
            <tr>
                <td>Ekonomi</td>
                <td>Rp.200.000</td>
                <td>Jabodetabek - Jawa Timur</td>
            </tr>
            </table>
            </div>
      </div>
      <div class="modal-footer">
          <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
          <a href="booking.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal ekonomi  -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>