<?php
//includekan untuk koneksi database
include 'database.php';

// $hapus = $_GET[id];
// echo $hapus;
// die();
//query hapus jabatan dari id yg di post
$sql = "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'";
$query = mysqli_query($con, $sql);

//pengecekan masuk tidaknya
if ($query) {
    echo "Berhasil kak";
    header('location:pegawai.php');
} else {
    echo "Gagal Kak";
    header('location:pegawai.php');
}

// echo $new_jabatan;
// die();
