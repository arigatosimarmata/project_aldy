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
}

//ambil pegawai yang disimpan
$update_foto = $nama_file;
$update_nama = $_POST['nama'];
$update_jk = $_POST['jk'];
$update_tanggal = $_POST['tanggal'];
$update_keterangan = $_POST['keterangan'];

//merubah value nama dari form jadi angka sesuai dengan database 
$sql1 = "SELECT id_jabatan FROM jabatan WHERE nama_jabatan='$_POST[jabatan]'";
$query1 = mysqli_query($con, $sql1);
$data1 = mysqli_fetch_array($query1);
$update_jabatan = $data1['id_jabatan'];
// $new_jabatan = $_POST['jabatan'];
// echo $new_foto;
// echo $new_nama;
// echo $new_jk;
// echo $new_tanggal;
// echo $new_jabatan;
// die();

//query masukin new jabatan ke query
if ($nama_file == null) {
    $sql2 = "UPDATE pegawai SET nama_pegawai='$update_nama', jenis_kelamin='$update_jk', tgl_lahir='$update_tanggal',
    keterangan='$update_keterangan', id_jabatan='$update_jabatan' WHERE id_pegawai='$_POST[id]' ";
} else {
    $sql2 = "UPDATE pegawai SET nama_pegawai='$update_nama', jenis_kelamin='$update_jk', tgl_lahir='$update_tanggal',
    foto='$update_foto', keterangan='$update_keterangan', id_jabatan='$update_jabatan' WHERE id_pegawai='$_POST[id]' ";
}
// echo $sql2;
// die();
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
