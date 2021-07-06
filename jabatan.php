<?php
//includekan untuk koneksi database
include 'database.php';
?>
<!-- jabatan -->
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
            <h1>Daftar Jabatan PT. Baskara</h1>
            <!-- mengeluarkan jabatan semua orang, dengan while u/ semua data, urut dari terakhir -->
            <?php
            $sql = "SELECT * FROM jabatan ORDER BY id_jabatan DESC";
            $query = mysqli_query($con, $sql);
            $no = 0;
            // bentuk tabel dalam php
            echo "<a class='tombol' href='jabatan_tambah.php'>Tambah</a></td>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Nama</th>";
            echo "<th>Jabatan</th>";
            echo "</tr>";
            echo "</thead>";
            while ($data = mysqli_fetch_array($query)) {
                $no++;
                echo "<tbody>";
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[nama_jabatan]</td>";
                echo "<td><a class='tombol hapus' href='jabatan_hapus.php?id=$data[id_jabatan]'>Hapus</a></td>";
                echo "</tr>";
                echo "</tbody>";
            }
            echo "</table>";
            ?>
            <h3>Setinggi apapun jabatan kita, jangan pernah lupakan doa orang tua</h3>
        </section>
    </div>
    <footer>
        Copyright &copy; Muhammad Renaldy Baskara
    </footer>
</body>

</html>