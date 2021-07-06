<?php
//includekan untuk koneksi database
include 'database.php';

// $hapus = $_GET[id];
// echo $hapus;
// die();
//query hapus jabatan dari id yg di post
$sql = "DELETE FROM jabatan WHERE id_jabatan='$_GET[id]'";
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
