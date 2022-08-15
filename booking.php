<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link css booking -->
    <link rel="stylesheet" href="../bus/css/booking.css">
    <title>Document</title>
</head>
<body>

    <!-- awal navbar  -->
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
  <br><br>
    <div class="container-lg md-4 mt-4">
        <div class="card border border-dark">
            <form action="" method="POST">
                <div class="row ms-5 me-0 mb-3">
                    <h3 class="mb-4 mt-3 text-center">Booking Sekarang!</h3>
                    <label for="nama" class="col-sm-5 col-form-label">Nama Lengkap</label>
                    <div class="col-md-6">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" maxlength="50" required>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="no_identitas" class="col-sm-5 col-form-label">Nomer Identitas</label>
                    <div class="col-md-6">
                        <input type="text" name="no_identitas" class="form-control" id="no_identitas" min="0" placeholder="Nomor Identitas" required maxlength="16">
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="hp" class="col-sm-5 col-form-label">No. HP</label>
                    <div class="col-md-6">
                        <input type="text" name="hp" class="form-control" id="hp" min="0" placeholder="No Telepon" required maxlength="12">
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="kelas_penumpang" class="col-sm-5 col-form-label">Kelas Penumpang</label>
                    <div class="col-md-6">
                        <select class="form-select" name="kelas_penumpang" id="kelas_penumpang" onchange="harga()" required>
                            <option selected>Pilih Kelas Bus</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Eksekutif">Eksekutif</option>
                        </select>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-3">
                    <label for="jadwal_keberangkatan" class="col-sm-5 col-form-label">Jadwal Keberangkatan</label>
                    <div class="col-md-6">
                        <input type="date" name="jadwal_keberangkatan" class="form-control" id="jadwal_keberangkatan" required>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-0">
                    <label for="jumlah_penumpang" class="col-sm-5 col-form-label" style="margin-top: -7px;"> Jumlah Penumpang <br>
                        <small style="font-size: 12px;">Usia dibawah 60 Tahun</small>
                    </label>
                    <div class="col-md-6">
                        <input type="number" name="jumlah_penumpang" id="jumlah_penumpang" class="form-control" min="0" required
                        onKeyDown="limitText(this,4);" onKeyUp="limitText(this,4)">
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-1">
                    <label for="jumlah_penumpangLansia" class="col-sm-5 col-form-label" style="margin-top: -7px;">Jumlah Penumpang Lansia<br>
                        <small style="font-size: 12px;">Usia 60 Tahun Keatas</small>
                    </label>
                    <div class="col-md-6">
                        <input type="number" name="jumlah_penumpangLansia" id="jumlah_penumpangLansia" class="form-control" min="0" required
                        onKeyDown="limitText(this,4);" onKeyUp="limitText(this,4)">
                    </div>
                </div>
                <div class="row ms-5 me-0">
                    <label for="harga_tiket" class="col-sm-5 col-form-label">Harga Tiket</label>
                    <div class="col-md-6">
                        <p class="mt-1" style="display: flex;">
                            Rp. <input type="number" name="harga_tiket" id="harga_tiket" class="form-control" readonly required 
                            style="border: none; margin-top: -5px;">
                        </p>
                    </div>
                </div>
                <div class="row ms-5 me-0">
                    <label for="total" class="col-sm-5 col-form-label">Total Bayar</label>
                    <div class="col-md-6">
                        <p class="mt-1" style="display: flex;">
                            Rp. <input type="number" name="total" id="total" class="form-control" readonly required
                            style="border: none; margin-top: -5px;">
                        </p>
                    </div>
                </div>
                <div class="row ms-5 me-0 mb-2">
                    <label for="total" class="col-sm-11 col-form-label">
                        <input type="checkbox" name="setuju" required>
                        Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah
                        ditetapkan.
                    </label>
                </div>
                <div class="row ms-5 me-0 mb-2 ">
                    <div class="btn-inline">
                        <center>
                        <button type="reset" class="btn btn-md btn-danger m-1" data-bs-dismiss="modal" style="width: 268px;">
                        <a href="index.php" class="text-white text-decoration-none">Cancel</a>
                        </button>
                        <button type="submit" name="submit" class="btn btn-md btn-primary btn-outline-info text-light" style="width: 268px;"> Pesan Tiket</button></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir form  -->

    <!-- jquary  -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- CDN Sweetalert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function harga() {
        const kelas = document.getElementById("kelas_penumpang").value;
            if (kelas == "Ekonomi") { 
                document.getElementById("harga_tiket").value = 200000;
            } else if (kelas == "Bisnis") {
               document.getElementById("harga_tiket").value =  300000;
             } else if (kelas == "Eksekutif") {
                document.getElementById("harga_tiket").value = 450000;
           }
        }

        // Jquery untuk menghitung secara live pada form input
        $("#jumlah_penumpangLansia").keyup(function() {
            // parseInt untuk mengkonversi sebuah string menjadi angka(integer)
            var jumlah_penumpang = parseInt($("#jumlah_penumpang").val());
            var jumlah_penumpangLansia = parseInt($("#jumlah_penumpangLansia").val());
            var harga_tiket = parseInt($("#harga_tiket").val());
            if (jumlah_penumpangLansia > 0) {
                var potongan = harga_tiket * 0.1;
                var potongan_hargaLansia = jumlah_penumpangLansia * potongan;
                var total_hargaLansia = (jumlah_penumpangLansia * harga_tiket) - potongan_hargaLansia;

                var total = (jumlah_penumpang * harga_tiket) + total_hargaLansia;
            } else {
                var total = (jumlah_penumpang * harga_tiket) + jumlah_penumpangLansia;
            }
            $("#total").val(total);
        });
<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambah atau tidak
    if(booking($_POST) > 0) {
        ?>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Tiketmu berhasil dipesan!',
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = 'invoice.php';
            }
        })
<?php
        // jika gagal pesan tiket, maka menampilkan alert gagal
    } else {
        echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Silahkan isi form dengan benar!',
            }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = 'booking.php';
            }
        })
        </script>
        ";
        exit;
    }
}
?>
</script>
</body>
</html>