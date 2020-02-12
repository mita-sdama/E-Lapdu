<?php 
include "header.php";
?>
<div class="jumbotron jumbotron-fluid bg-white border mt-4" >
    <div class="container">
        <p style="font-size:24px;"><b>Pengaduan</b></p>
       
        <?php
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM aduan WHERE id_aduan='$id'");
        $show = mysqli_fetch_array($data);
        ?>
        
        <div class="row">
                <div class="col-lg-1">
                Kode
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['kode_aduan']; ?>
                </div>

                <div class="col-lg-1">
                Tanggal
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['tgl_aduan']; ?>
                </div>

                <div class="col-lg-1">
                Pegawai
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['nama_pegawai']; ?>
                </div>

                <div class="col-lg-1">
                Aduan
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['subyek_aduan']; ?>
                </div>

                <div class="col-lg-1">
                Isi 
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['isi_aduan']; ?>
                </div>

        </div>
        <p></p> <p style="font-size:24px;"><b>Pelapor</b></p>
        <div class="row">
                <div class="col-lg-12 ">
                 <img src="../assets/ktp/<?php echo $show['foto_ktp'] ?>" width="300px"><p></p>
                </div>
               
              
                <div class="col-lg-1">
                Nama
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['nama_pelapor']; ?>
                </div>

                <div class="col-lg-1">
                No. KTP
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['no_ktp']; ?>
                </div>

                <div class="col-lg-1">
                Alamat
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['alamat']; ?>
                </div>

                <div class="col-lg-1">
                Email
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['email']; ?>
                </div>

                <div class="col-lg-1">
                No. HP
                </div>
                <div class="col-lg-1 text-center">
                :
                </div>
                <div class="col-lg-10">
                <?php echo $show['no_hp']; ?>
                </div>

                <div class="col-lg-4 pt-2">
                <div class="row">
                <div class="col-lg-6">
                <a class="btn btn-success" href="status_proses.php?id=<?php echo $show['id_aduan']; ?>" role="button">Tanggapi <i class="fa fa-check" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-6">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal">
                Tidak <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                
                </div>
                </div>
                </div>
                <div class="col-lg-8">
                </div>

        </div>

    </div>
</div>
        
</div>

<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Pengaduan yang tidak ditanggapi akan dihapus <br>
        Apakah Anda Yakin ?
      </div>
      <div class="modal-footer">
      <a class="btn btn-danger" href="hapus_aduan.php?id=<?php echo $show['id_aduan']; ?>" role="button">Hapus</a>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php"; 
?>

