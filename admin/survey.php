<?php 
include "header.php";
?>
<div class="jumbotron jumbotron-fluid bg-white border mt-4" >
    <div class="container">
        <p class="lead"><b>Data Survey Kepuasan Publik</b></p>
       
        <div class="col-lg-12">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Tingkat Kepuasan</th>
      
            </tr>
        </thead>
        <tbody>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM survey");
        $no = 1;
        while($show = mysqli_fetch_array($data)){
            $p1 = $show['p1'];
            $p2 = $show['p2'];
            $p3 = $show['p3'];
            $p4 = $show['p4'];
            $p5 = $show['p5'];
            $jumlah = $p1+$p2+$p3+$p4+$p5;
            $persen = ($jumlah/20)*100;
            ?>
            
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $show['nama']; ?></td>
                <td><?php echo $show['pekerjaan']; ?></td>
                <td><?php echo $persen."%"; ?></td>
                
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