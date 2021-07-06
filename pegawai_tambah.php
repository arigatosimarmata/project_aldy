<?php
//includekan untuk koneksi database
include 'database.php';
?>
<!-- Jabatan tambah -->
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
        <!-- isi pegawai tambah ada di section -->
        <section class="main">
            <h1>Tambah Pegawai</h1>
            <form method="POST" enctype="multipart/form-data" action="proses_pegawai_tambah.php">
                <div class="form-group">
                    <label for="foto">Foto :</label>
                    <div class="input">
                        <input type="file" id="foto" name="foto">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pegawai :</label>
                    <div class="input">
                        <input type="text" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin :</label>
                    <div class="input">
                        <input type="radio" id="jk" name="jk" value="L"> Laki-laki
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <input type="radio" id="jk" name="jk" value="P"> Perempuan
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir</label>
                    <div class="input">
                        <input type="date" name="tanggal" id="tanggal">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <div class="input">
                        <?php
                        $sql = "SELECT nama_jabatan FROM jabatan";
                        $query = mysqli_query($con, $sql);
                        $data = mysqli_fetch_array($query);
                        ?>
                        <select name="jabatan" id="jabatan">
                            <!-- <option value="">-Pilih Jabatan-</option> -->
                            <?php
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='$data[nama_jabatan]'>$data[nama_jabatan]";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <div class="input">
                        <textarea name="keterangan" id="keterangan" cols="78" rows="10"></textarea>
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