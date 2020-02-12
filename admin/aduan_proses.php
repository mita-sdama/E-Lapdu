<?php 
include "header.php";
?>
<div class="jumbotron jumbotron-fluid bg-white border mt-4" >
    <div class="container">
        <p class="lead"><b>Data Proses Pengaduan</b></p>
       <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="edit"){
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <strong>Berhasil</strong> Pengaduan telah selesai ditanggapi
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
        $data = mysqli_query($koneksi, "SELECT * FROM aduan WHERE status='proses'");
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
                
                <a href="proses_lapor.php?id=<?php echo $show['id_aduan'] ?>" class="btn btn-success" role="button" >Selesai</a>

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