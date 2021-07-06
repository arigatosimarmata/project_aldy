<?php
//includekan untuk koneksi database
include 'database.php';
?>
<!-- index -->
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>Aplikasi Manajemen Pegawai</header>
    <div class="container">
        <aside>
            <ul class="menu">
                <li><a href="index.php" class="aktif">Dashboard</a></li>
                <li><a href="pegawai.php">Data Pegawai</a></li>
                <li><a href="jabatan.php">Data Jabatan</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>
        <section class="main">
            <h1>Selamat Datang di Aplikasi Manajemen Pegawai</h1>
            <h3>Anda login sebagai Administrator</h3>
        </section>
    </div>
    <footer>
        Copyright &copy; Muhammad Renaldy Baskara
    </footer>
    <!-- <script>
        function myFunction() {
            return confirm("Yakin keluar?");
        }
    </script> -->
</body>

</html>