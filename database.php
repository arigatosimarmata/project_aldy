<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pegawai";

//koneksi database
$con = mysqli_connect($host, $user, $password, $database);

//cek kesalahan koneksi
if (!$con) {
    echo "Koneksi gagal" . mysqli_connect_error();
    exit();
}
