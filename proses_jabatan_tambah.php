<?php
//includekan untuk koneksi database
include 'database.php';
//ambil jabatan yang disimpan
$new_jabatan = $_POST['nama'];

//query masukin new jabatan ke query
$sql = "INSERT INTO jabatan SET nama_jabatan='$new_jabatan'";
$query = mysqli_query($con, $sql);

//pengecekan masuk tidaknya
if ($query) {
    echo "Berhasil kak";
    header('location:jabatan.php');
} else {
    echo "Gagal Kak";
    header('location:jabatan.php');
}

// echo $new_jabatan;
// die();
