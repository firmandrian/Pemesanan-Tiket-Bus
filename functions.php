<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "dbbus");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

function booking($data) {
    global $conn;
    $nama = htmlspecialchars ($data["nama"]);
    $no_identitas = htmlspecialchars ($data["no_identitas"]);
    $hp = htmlspecialchars ($data["hp"]);
    $kelas_penumpang = htmlspecialchars ($data["kelas_penumpang"]);
    $jadwal_keberangkatan = htmlspecialchars ($data["jadwal_keberangkatan"]);
    $jumlah_penumpang = htmlspecialchars ($data["jumlah_penumpang"]);
    $jumlah_penumpangLansia = htmlspecialchars ($data["jumlah_penumpangLansia"]);
    $harga_tiket = htmlspecialchars ($data["harga_tiket"]);
    $total = htmlspecialchars ($data["total"]);

    $query = "INSERT INTO tbbus   
                VALUES 
    ('', '$nama', '$no_identitas', '$hp','$kelas_penumpang','$jadwal_keberangkatan','$jumlah_penumpang','$jumlah_penumpangLansia','$harga_tiket','$total')
    "; 
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>
