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
  <body>
    
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-lg-6">
            Instansi : <b> KEJAKSAAN </b> 
            </div>
            <div class="col-lg-6 right">
            <div class="float-right">
            <a name="survey" class="btn" href="survey.php" role="button" style="background:#fda607;color:#ffffff;"> Survey Kepuasan Publik </a>
            <a name="lacak"  class="btn btn-danger" href="index.php" role="button"> Laporan Pengaduan <i class="fa fa-exclamation-circle"></i></a>
            <a name="" id="" class="btn btn-success" href="login.php" role="button"> Login</a>
            </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-4">
                    <div class="container p-2 my-2 border">
                        <div class="col-lg-12 p-2" style="background-color:#328af7;" >
                        <div class="row">
                        <div class="col-lg-5">
                        <div class="text-center">
                        <img src="assets/image/icon.png" width="150px">
                        <div style="color:#ffffff;">Hubungi Kami</div>
                        </div>
                        </div>
                        <div class="col-lg-7">
                        <h1 style="color:#ffffff;font-size:50px;padding-top:20px;">E-LAPDU</h1>
                        <h6 style="color:#fff620;"> Laporan Pengaduan Online</h6>
                        </div>
                        </div>
                        
                        </div>
                        <div class="col-lg-12">
                        <p></p>
                        <h5>Syarat dan Ketentuan</h5>
                        <p></p>
                        Penerimaan pengaduan masyarakat melalui website ini adalah untuk pengaduan yang berkaitan dengan
                        <p></p>
                        <i class="fa fa-check-circle" style="color:green;" ></i>
                        Dugaan pelanggaran perilaku ataupun ketidakprofesionalan "<b>Jaksa dan Pegawai</b>" dalam melaksanakan tugas <p></p>
                        Kami tidak akan menindaklanjuti<p></p>
                        <i class="fa fa-check-circle" style="color:green;" ></i>
                        Pengaduan yang tidak mencantumkan identitas lengkap (anonim)<p></p>
                        <i class="fa fa-check-circle" style="color:green;" ></i>
                        Pengaduan mengenai dugaan terjadinya suatu tindak pidana<p></p>
                        Setiap pengaduan yang diterima melalui website ini akan di proses dan dapat dilihat melalui lacak pengaduan
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="container p-4 my-2 border">
              
                    <h5> Lacak Pengaduan</h5>
                  
                    <div class="row">
                        <div class="col-lg-3">
                        Kode Pengaduan
                        </div>
                        <div class="col-lg-9">
                        <form method="POST" action="" >
                        <div class="form-group">
                          <input type="text" class="form-control" name="kode" placeholder="Kode">
                        </div>
                        </div>

                       

                        <div class="col-lg-3">
                        
                        </div>
                        <div class="col-lg-9 text-right">
                        <input type="submit" class="btn btn-primary" name="submit" value="Cari">
                        </div>
                        </form>
                        <?php
                        include "connection.php";
                        if(isset($_POST['submit'])){
                          $cari = $_POST['kode'];
                          if($cari != ""){
                            $data = mysqli_query($koneksi, "SELECT * FROM aduan WHERE kode_aduan = '$cari'");
                            $cek = mysqli_num_rows($data);
                            if($cek < 1){
                              ?>
                              <div class="col-lg-12 text-center">
                              <i><h3>"Kode Aduan Tidak Ditemukan"</h3></i>
                              </div>
                              <?php
                            }else{
                              while ($show=mysqli_fetch_array($data)) {
                              
                              ?>
                             
                              <div class="col-lg-12">
                              <h5> Data Pengaduan </h5>
                              
                              <div class="row">
                                  <div class="col-lg-3">
                                  Kode
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['kode_aduan']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  Tanggal Pengaduan
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['tgl_aduan']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  Nama Pegawai
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['nama_pegawai']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  Subyek Aduan
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['subyek_aduan']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  Isi Aduan
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['isi_aduan']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  Status
                                  </div>
                                  <div class="col-lg-9">
                                  <?php 
                                  if($show['status'] == "lapor"){
                                    ?>
                                    <b style="color:red;">Belum Terjawab</b>
                                    <?php
                                  }else if($show['status'] == "proses"){
                                    ?>
                                    <b style="color:orange;">Sedang Proses</b>
                                    <?php
                                  }else if($show['status'] == "selesai"){
                                    ?>
                                    <b style="color:green;">Selesai</b>
                                    <?php
                                  }
                                  ?>
                                  </div>

                                </div>

                                
                              </div>

                              <div class="col-lg-12">
                              <h5> Pelapor</h5>
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                  <img src="assets/ktp/<?php echo $show['foto_ktp'] ?>" width="200px">
                                  </div>
                                  <div class="col-lg-3">
                                  Nama
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['nama_pelapor']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  No. KTP
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['no_ktp']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  Alamat
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['alamat']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  Email
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['email']; ?>
                                  </div>

                                  <div class="col-lg-3">
                                  No. HP
                                  </div>
                                  <div class="col-lg-9">
                                  <?php echo $show['no_hp']; ?>
                                  </div>

                                  


                                </div>
                              </div>

                              <?php
                              }
                            }
                          }
                        }
                        ?>

                    </div>
                   
                    </div>
               
                </div>
        </div>
    </div>

    <script src="assets/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  </body>
</html>