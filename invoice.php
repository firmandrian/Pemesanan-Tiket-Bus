<?php
require 'functions.php';

$data = query("SELECT * FROM tbbus")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link css invoice  -->
    <link rel="stylesheet" href="../bus/css/invoice.css">
    <title>Document</title>
</head>
<body>
    <!-- navbar  -->
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

  <!-- form -->
  <div class="container-lg mt-5 fw-bold">
        <div class="card shadow-sm p-3 mb-5 bg-body rounded">

            <div class="row ms-5 me-0">
                <h3 class="mb-4 mt-3 text-center">Invoice Pemesanan Tiket</h3>
                <hr>
                <label for="nama" class="col-sm-6 col-form-label ">Nama Lengkap</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $data['nama']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label ">Nomer Identitas</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $data['no_identitas']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="hp" class="col-sm-6 col-form-label ">No Hp</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $data['hp']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="kelas_penumpang" class="col-sm-6 col-form-label ">Kelas Penumpang</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $data['kelas_penumpang']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="jadwal_keberangkatan" class="col-sm-6 col-form-label ">Jadwal Keberangkatan</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $data ['jadwal_keberangkatan']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="jumlah_penumpang" class="col-sm-6 col-form-label ">Jumlah Penumpang</label>
                <div class="col-md-6 mt-2">
                <p>: <?= $data['jumlah_penumpang']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="jumlah_penumpangLansia" class="col-sm-6 col-form-label ">Jumlah Penumpang Lansia</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $data['jumlah_penumpangLansia']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="harga_tiket" class="col-sm-6 col-form-label ">Harga Tiket</label>
                <div class="col-md-6 mt-2">
                    <p>: Rp. <?= $data['harga_tiket']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="total" class="col-sm-6 col-form-label ">Total Harga</label>
                <div class="col-md-6 mt-2">
                    <p>: Rp. <?= $data['total']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- akhir form  -->
</body>
</html>