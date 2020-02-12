<!doctype html>
<html lang="en">
  <head>
    <title>E-LAPDU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/image/ico.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  </head>
  <body style="background-color:#0d9e2e;">

    <div class="container-fluid">
        <div class="row p-5 text-center">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4 p-5 border rounded-lg" style="background-color:#ffffff;">
            <img src="assets/image/ico.png" width="100px"><p></p>
            <?php
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=="gagal"){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                  </button>
                  <strong>Login Gagal</strong> Periksa Username dan Password anda
                </div>
                <?php
              }else if($_GET['pesan'] == "logout"){
                ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                  </button>
                  Anda telah berhasil <strong>Logout</strong>
                </div>
                <?php
              }else if($_GET['pesan']== "belum_login"){
                ?>
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                  </button>
                  Anda harus login untuk mengakses halaman <strong>Admin</strong>
                </div>
                <?php
              }
            }
            ?>
            <form method="POST" action="login_proses.php">
            <div class="form-group">
              <input type="text" class="form-control" name="username"  placeholder="username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password"  placeholder="password" required>
            </div>
            <div class="text-right">
           <button type="submit" class="btn btn-success" name="submit">Login</button>
           </div>
           </form>
           <p></p>
           
            </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>

    <script src="assets/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>