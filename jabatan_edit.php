<?php
//includekan untuk koneksi database
include 'database.php';
?>
<!-- jabatan edit -->
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
        <!-- isi jabatan edit ada di section -->
        <section class="main">
            <h1>Edit Jabatan</h1>
            <?php
            $jabatanid = $_GET['id'];
            $sql = "SELECT * FROM jabatan WHERE id_jabatan='$jabatanid'";
            // echo $sql;
            // die();
            $query = mysqli_query($con, $sql);
            $data = mysqli_fetch_array($query);
            ?>
            <form method="POST" action="proses_jabatan_edit.php">
                <div class="form-group">
                    <label for="nama">Nama Jabatan :</label>
                    <div class="input">
                        <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">
                        <input type="text" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="tombol" value="Simpan">
                </div>
            </form>
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