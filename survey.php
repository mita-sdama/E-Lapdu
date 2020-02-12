<!doctype html>
<html lang="en">
  <head>
    <title>E-SURVEY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/image/ico.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  </head>
  <body>
    
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-lg-6">
            Instansi : <b> KEJAKSAAN </b> 
            </div>
            <div class="col-lg-6 right">
            <div class="float-right">
            <a name="survey" class="btn btn-danger" href="index.php" role="button"> Laporan Pengaduan <i class="fa fa-exclamation-circle"></i></a>
            <a name="" id="" class="btn btn-success" href="login.php" role="button"> Login</a>
            </div>
            </div>
        </div>
        <form method="POST" action="">
       <div class="row p-3" style="background-color:#00a6ff;">
       <div class="col-lg-3">
       </div>
       <div class="col-lg-9">
       <?php
       include "connection.php";
        if(isset($_POST['submit'])){
          $nama = $_POST['nama'];
          $pekerjaan = $_POST['pekerjaan'];
          $p1 = $_POST['p1'];
          $p2 = $_POST['p2'];
          $p3 = $_POST['p3'];
          $p4 = $_POST['p4'];
          $p5 = $_POST['p5'];
          $insert = mysqli_query($koneksi, "INSERT INTO survey VALUES ('','$nama','$pekerjaan','$p1','$p2','$p3','$p4','$p5')");
          if(!$insert){
           ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
              </button>
              data gagal untuk di tambahkan 
            </div>
           <?php
          }else{
            ?>
             <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
              </button>
              <strong>Terima Kasih</strong> untuk survey kepuasan yang telah diberikan
            </div>
            <?php
           
          }
        }

       ?> 
    
       </div>
     
       <div class="col-lg-3" style="color:#ffffff;">
       Nama
       </div>
       <div class="col-lg-9">
       <div class="form-group">
         <input type="text" class="form-control" name="nama" placeholder="Nama Anda" required>
       </div>
       </div>

       <div class="col-lg-3" style="color:#ffffff;">
       Pekerjaan
       </div>
       <div class="col-lg-9">
       <div class="form-group">
         <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required>
       </div>
       </div>

       </div>

       <table class="table  table-responsive">
           <thead class="thead-inverse ">
               <tr>
                   <th></th>
                   <th>Sangat Memuaskan</th>
                   <th>Memuaskan</th>
                   <th>&nbsp;&nbsp;&nbsp;Biasa&nbsp;&nbsp;&nbsp;</th>
                   <th>Kurang Memuaskan</th>
                   <th>Sangat Kurang Memuaskan</th>
               </tr>
               </thead>
               <tbody>
                   <tr>
                       <td scope="row">Keramahan petugas PTSP/ Jaksa/ Pegawai Kejaksaan yang melayani anda</td>
                       <div class="form-check">
                       <td><input type="radio" class="form-check-input" name="p1" value="4" ><img src="assets/image/5.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p1" value="3" ><img src="assets/image/4.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p1" value="2" checked ><img src="assets/image/3.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p1" value="1" ><img src="assets/image/2.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p1" value="0" ><img src="assets/image/1.png" width="40px"></td>
                       </div>
                   </tr>
                   <tr>
                   <td scope="row">Kecepatan waktu dalam penyelesaian masalah/ pemberian pelayanan</td>
                   <div class="form-check">
                       <td><input type="radio" class="form-check-input" name="p2" value="4" ><img src="assets/image/5.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p2" value="3" ><img src="assets/image/4.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p2" value="2" checked><img src="assets/image/3.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p2" value="1" ><img src="assets/image/2.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p2" value="0" ><img src="assets/image/1.png" width="40px"></td>
                       </div>
                   </tr>
                   <tr>
                   <td scope="row">Solusi atau jawaban yang diberikan terkait proses penyelesian masalah/ layanan</td>
                   <div class="form-check">
                       <td><input type="radio" class="form-check-input" name="p3" value="4" ><img src="assets/image/5.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p3" value="3" ><img src="assets/image/4.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p3" value="2" checked><img src="assets/image/3.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p3" value="1" ><img src="assets/image/2.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p3" value="0" ><img src="assets/image/1.png" width="40px"></td>
                       </div>
                   </tr>
                   <tr>
                   <td scope="row">Wawasan dari petugas PTSP/ Jaksa/ Pegawai Kejaksaan yang melayani Anda</td>
                   <div class="form-check">
                       <td><input type="radio" class="form-check-input" name="p4"  value="4" ><img src="assets/image/5.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p4"  value="3" ><img src="assets/image/4.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p4"  value="2" checked><img src="assets/image/3.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p4"  value="1" ><img src="assets/image/2.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p4"  value="0" ><img src="assets/image/1.png" width="40px"></td>
                       </div>
                   </tr>
                   <tr>
                   <td scope="row">Nilai Kepuasan secara umum</td>
                   <div class="form-check">
                       <td><input type="radio" class="form-check-input" name="p5"  value="4" ><img src="assets/image/5.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p5"  value="3" ><img src="assets/image/4.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p5"  value="2" checked><img src="assets/image/3.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p5"  value="1" ><img src="assets/image/2.png" width="40px"></td>
                       <td><input type="radio" class="form-check-input" name="p5"  value="0" ><img src="assets/image/1.png" width="40px"></td>
                       </div>
                   </tr>
               </tbody>
       </table>
        <div class="text-center">
       <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
       </div>
       </form>

    </div>

    <script src="assets/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  </body>
</html>