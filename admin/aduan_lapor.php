<?php 
include "header.php";
?>
<div class="jumbotron jumbotron-fluid bg-white border mt-4" >
    <div class="container">
        <p class="lead"><b>Data Laporan Pengaduan</b></p>
       <?php
       if(isset($_GET['pesan'])){
        if($_GET['pesan']=="edit"){
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            <strong>Berhasil</strong> Untuk memproses pengaduan
          </div>
          <?php
        }else if($_GET['pesan'] == "hapus"){
          ?>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            <strong>Berhasil</strong> Untuk menghapus pengaduan
          </div>
          <?php
        }
    }
       ?>
        <div class="col-lg-12">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Pegawai</th>
                <th>subyek</th>
                <th> Aksi</th>
      
            </tr>
        </thead>
        <tbody>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM aduan WHERE status='lapor'");
        $no = 1;
        while($show = mysqli_fetch_array($data)){
            
            ?>
            
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $show['nama_pelapor']; ?></td>
                <td><?php echo $show['tgl_aduan']; ?></td>
                <td><?php echo $show['nama_pegawai'];?></td>
                <td><?php echo $show['subyek_aduan']; ?></td>
                <td>  
                <a href="proses_aduan.php?id=<?php echo $show['id_aduan'] ?>" class="btn btn-warning" role="button" style="color:#ffffff">Proses</a>

                </td>
                
            </tr>
            <?php
            $no++;
        }
        
           ?>
        </tbody>
       
    </table>
    </div>
</div>
        
</div>
<?php
include "footer.php"; 
?>