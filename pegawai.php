<?php
//includekan untuk koneksi database
include 'database.php';
?>
<!-- pegawai -->
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
            <h1>Daftar Pegawai PT. Baskara</h1>
            <!-- mengeluarkan list semua pegawai, dengan while u/ semua data, urut dari terakhir -->
            <?php
            // $sql = "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC";
            $sql = "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan  ORDER BY pegawai.id_pegawai DESC";
            $query = mysqli_query($con, $sql);
            $no = 0;
            // bentuk tabel dalam php
            echo "<a class='tombol' href='pegawai_tambah.php'>Tambah</a></td>";
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Foto</th>";
            echo "<th>Nama</th>";
            echo "<th>Jenis Kelamin</th>";
            echo "<th>Tanggal lahir</th>";
            echo "<th>Jabatan</th>";
            echo "<th>Keterangan</th>";
            echo "<th>Aksi</th>";
            echo "</tr>";
            echo "</thead>";
            while ($data = mysqli_fetch_array($query)) {
                $no++;
                echo "<tbody>";
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td><img src='images/$data[foto]' width='100' height='100'></td>";
                echo "<td>$data[nama_pegawai]</td>";
                echo "<td>$data[jenis_kelamin]</td>";
                echo "<td>$data[tgl_lahir]</td>";
                echo "<td>$data[nama_jabatan]</td>";
                echo "<td>$data[keterangan]</td>";
                echo "<td><a class='tombol hapus' href='pegawai_hapus.php?id=$data[id_pegawai]'>Hapus</a></td>";
                echo "</tr>";
                echo "</tbody>";
            }
            echo "</table>";
            ?>
            <h3>Pegawai adalah pilar penyokong kemajuan perusahaan</h3>
        </section>
    </div>
    <footer>
        Copyright &copy; Muhammad Renaldy Baskara
    </footer>
</body>

</html>