<?php 
include "header.php";
?>
<div class="jumbotron jumbotron-fluid bg-white border mt-4" >
    <div class="container">
        <p class="lead"><b>Data Pengaduan</b></p>
       
        <div class="col-lg-12">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Pegawai</th>
                <th>subyek</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM aduan WHERE status='selesai'");
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

                <a href="proses_selesai.php?id=<?php echo $show['id_aduan'] ?>" class="btn btn-primary" role="button" >Detail</a>
     
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