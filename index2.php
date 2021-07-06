<?php
//includekan untuk koneksi database
include 'database.php';
?>
<!-- index -->
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="open-iconic/font/css/open-iconic-bootstrap.min.css">
</head>

<body class="h-100">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
        <a class="navbar-brand" href="#">Manajemen Pegawai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria_controls="sidebars" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse navbar-collapse" id="sidebar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">
                        <i class="oi oi-dashboard"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="pegawai.php">
                        <i class="oi oi-person"></i>Data Pegawai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="jabatan.php">
                        <i class="oi oi-sort descending"></i>Data Jabatan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">
                        <i class="oi oi-account-logout"></i>Keluar
                    </a>
                </li>
            </ul>
        </nav>
    </nav>
    <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
        <section>
            <div class="jumbotron   mt-3">
                <h1>Selamat Datang di </h1>
                <h1 class=" display-4">Aplikasi Manajemen Pegawai </h1>
                <h3>Anda login sebagai Administrator</h3>
            </div>

            <?php
            $jml_pegawai    =  mysqli_num_rows(mysqli_query($con, "SELECT * FROM pegawai"));
            $jml_jabatan    =  mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan"));
            ?>

            <div class="row mb-3 pb-3">
                <div class="col-sm-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item   text-danger">
                            <i class="oi  oi-person   display-3"></i>
                            <span class="display-3   float-right">
                                <?= $jml_pegawai    ?>
                            </span>
                        </li>
                        <li class="list-group-item   bg-danger">
                            <a href=" ?hal =jabatan" class="nav-link   text-white">Data Pegawai </a>
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-6 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item   text-success">
                            <i class=" oi oi-sort-descending display-3"></i>
                            <span class="display-3 float-right">
                                <?= $jml_jabatan   ?>
                            </span>
                        </li>
                        <li class="list-group-item   bg-success">
                            <a href=" ?hal=jabatan" class="nav-link   text-white">Data Jabatan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class="bg-light fixed-bottom">
        <p class="m-2 text-center text-muted">Copyright &copy; Nida Muhamad</p>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <footer>
        copyright
    </footer> -->
    <!-- <script>
        function myFunction() {
            return confirm("Yakin keluar?");
        }
    </script> -->
</body>

</html>