<?php
//includekan untuk koneksi database
include 'database.php';

// Khusus langkah2 foto, ambil data detail dalam foto
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];

// Set path/tempat folder menyimpan gambarnya
$path = "images/" . $nama_file;

//cek tipe jpeg, png
if ($tipe_file = "image/jpeg" || $tipe_file = "image/png") {
    //cek ukuran file
    if ($ukuran_file < 2000000) {
        //proses upload
        move_uploaded_file($tmp_file, $path);
    }
    echo "terlalu besar";
}

//ambil pegawai yang disimpan
$new_foto = $nama_file;
$new_nama = $_POST['nama'];
$new_jk = $_POST['jk'];
$new_tanggal = $_POST['tanggal'];
$new_keterangan = $_POST['keterangan'];

//merubah value nama dari form jadi angka sesuai dengan database 
$sql1 = "SELECT id_jabatan FROM jabatan WHERE nama_jabatan='$_POST[jabatan]'";
$query1 = mysqli_query($con, $sql1);
$data1 = mysqli_fetch_array($query1);
$new_jabatan = $data1['id_jabatan'];
// $new_jabatan = $_POST['jabatan'];
// echo $new_foto;
// echo $new_nama;
// echo $new_jk;
// echo $new_tanggal;
// echo $new_jabatan;
// die();

//query masukin new jabatan ke query
$sql2 = "INSERT INTO pegawai SET nama_pegawai='$new_nama', jenis_kelamin='$new_jk', tgl_lahir='$new_tanggal',
foto='$new_foto', keterangan='$new_keterangan', id_jabatan='$new_jabatan' ";
$query2 = mysqli_query($con, $sql2);

//pengecekan masuk tidaknya
if ($query2) {
    echo "Berhasil kak";
    header('location:pegawai.php');
} else {
    echo "Gagal Kak";
    header('location:pegawai.php');
}

// echo $new_jabatan;
// die();
