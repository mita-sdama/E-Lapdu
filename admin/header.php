<!doctype html>
<html lang="en">
  <head>
    <title>E-LAPDU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../assets/image/ico.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">

    <style>
    .navbar-dark .navbar-nav .nav-link {
    color: rgb(255, 255, 255);
    }
    .dropdown-item:visited{
        background-color:#28a745;
    }
    .responsive {
    width: 100%;
    height: auto;
    }
    </style>
    
  </head>
  <body>
    <?php
    include "../connection.php";
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../login.php?pesan=belum_login");
    }
    ?>

    <script src="../assets/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

    <nav class="navbar navbar-expand-sm navbar-dark bg-success fixed-top">
        <img src="../assets/image/ico.png" width="40px"> &nbsp;
        <a class="navbar-brand" href="#" style="color:#ffffff" >E-LAPDU</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId" style="color:#ffffff">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="survey.php">Survey</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengaduan</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="aduan_lapor.php">Lapor</a>
                        <a class="dropdown-item" href="aduan_proses.php">Proses</a>
                        <a class="dropdown-item" href="aduan_selesai.php">Selesai</a>
                    </div>
                </li>
            </ul>
            <div class="my-lg-0">
                <a name="" id="" class="btn btn-success" href="logout.php" role="button">Hi, <?php echo $_SESSION['username'] ?> <i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
    </nav>