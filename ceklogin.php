<?php
//includekan untuk koneksi database
include 'database.php';

//ambil username sama password pake post dari form login
$username = $_POST['user'];
$password = md5($_POST['pass']);

//cocokkan username dan post yang ada di database
$sql = "SELECT * FROM user WHERE username='admin'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);

//kalo sama, menuju halaman index
if ($username == $data['username'] and $password == $data['password']) {
    header('location:index.php');
} else {
    header('location:login.php');
}

// print_r($username);
// print_r($password);
// print_r($data['username']);
// print_r($data['password']);

// die();
