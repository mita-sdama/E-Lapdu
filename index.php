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
            <a name="lacak"  class="btn btn-primary" href="lacak.php" role="button"> Lacak Pengaduan <i class="fa fa-play-circle"></i></a>
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
                    <?php
                    include "connection.php";
                    function genid($length) {
                        $chars = "01234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        srand((double) microtime()*1000000);
                        $i=0;
                        $res="";
                        while($i<=$length) {
                            $num = rand() % 33;
                            $tmp = substr($chars, $num, 1);
                            $res = $res . $tmp;
                            $i++;
                        }
                        return $res;
                    }
                    if(isset($_POST['submit'])){
                    $kode_aduan = "LPD"."-".genid(3)."-".genid(3);
                    $nama_pelapor = $_POST['nama_pelapor'];
                    $no_ktp = $_POST['no_ktp'];
                    $alamat = $_POST['alamat'];
                    $email = $_POST['email'];
                    $no_hp = $_POST['no_hp'];
                    $foto = $_FILES['foto']['name'];
                    $nama_pegawai = $_POST['nama_pegawai'];
                    $subyek = $_POST['subyek'];
                    $isi = $_POST['isi'];
                    $tanggal = date("Y-m-d H:i:s");

                    move_uploaded_file($_FILES['foto']['tmp_name'],"assets/ktp/".$_FILES['foto']['name']);

                    $insert =  mysqli_query($koneksi, "INSERT INTO aduan (kode_aduan,nama_pelapor,no_ktp,alamat,email,no_hp,foto_ktp,nama_pegawai,subyek_aduan,isi_aduan,status)
                     VALUES ('$kode_aduan','$nama_pelapor','$no_ktp','$alamat','$email','$no_hp','$foto','$nama_pegawai','$subyek','$isi','lapor')");
                    if(!$insert){
                        ?>
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             <span class="sr-only">Close</span>
                           </button>
                           Pengaduan gagal untuk di tambahkan 
                         </div>
                        <?php
                       }else{
                         ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             <span class="sr-only">Close</span>
                           </button>
                           <strong>Terima Kasih</strong> Kami akan segera memproses Laporan Pengaduan yang anda berikan<br>
                           Gunakan kode <strong><?php echo $kode_aduan ?></strong> untuk melihat status pengaduan anda pada lacak pengaduan
                         </div>
                         <?php
                        
                       }
                     }
             
                    ?> 
                 
                    <form method="POST" action="" enctype="multipart/form-data">
                    <h5> Data Pelapor</h5><p></p>
                    <div class="row">
                        <div class="col-lg-3">
                        Nama Lengkap
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                            <input type="text" class="form-control" name="nama_pelapor" placeholder="Nama Lengkap" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                        No. KTP
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                            <input type="number" class="form-control" name="no_ktp" placeholder="No.KTP" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                        Alamat Sesuai KTP
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                        Email
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                        No. HP
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                            <input type="number" class="form-control" name="no_hp" placeholder="No. HP" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                        Foto KTP<i style="color:red;">*</i>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                              <input type="file" class="form-control-file" name="foto" placeholder="" required >
                            </div>
                        </div>

                    </div>
                    <hr>
                    <h5> Data Pengaduan </h5>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3">
                        Nama Pegawai
                        </div>
                        <div class="col-lg-9">
                        <div class="form-group">
                          <input type="text" class="form-control" name="nama_pegawai" placeholder="Nama Pegawai" required>
                        </div>
                        </div>

                        <div class="col-lg-3">
                        Subyek Pengaduan
                        </div>
                        <div class="col-lg-9">
                        <div class="form-group">
                        <input type="text" class="form-control" name="subyek" placeholder="Subyek" required>
                        </div>
                        </div>

                        <div class="col-lg-3">
                        Isi Pengaduan
                        </div>
                        <div class="col-lg-9">
                        <div class="form-group">
                          <textarea class="form-control" name="isi" rows="3" required></textarea>
                        </div>
                        </div>

                        <div class="col-lg-3">
                        
                        </div>
                        <div class="col-lg-9 text-right">
                        <button type="submit" name="submit" class="btn btn-primary">KIRIM <i class="fa fa-paper-plane"></i></button>
                        </div>

                    </div>
                   
                    </div>
                    </form>
                </div>
        </div>
    </div>

    <script src="assets/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  </body>
</html>