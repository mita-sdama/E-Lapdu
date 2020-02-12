<?php include "header.php"; ?>
    <div class="container-fluid text-center mt-5 pt-3">
        <div class ="row">
            <div class="col-lg-6">

            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="../assets/image/img3.jpg" class="responsive" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/image/img1.jpg" class="responsive" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            </div>
            <div class = "col-lg-6">

            
            <canvas id="myJumlah"></canvas>

            </div>
            <div class="col-lg-6 p-2">
            <p class="text-center"> Grafik Pengaduan </p>
            <canvas id="myChart"></canvas>
            </div>

            <div class="col-lg-6 p-2">
            <p class="text-center"> Grafik Survey </p>
            <canvas id="mySurvey"></canvas>
            </div>

        </div>
            
    </div>
<?php
include "footer.php";
?>

<script src="../assets/Chart.js"></script>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Lapor", "Proses", "Selesai"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_lapor = mysqli_query($koneksi,"select * from aduan where status='lapor'");
					echo mysqli_num_rows($jumlah_lapor);
					?>, 
					<?php 
					$jumlah_proses = mysqli_query($koneksi,"select * from aduan where status='proses'");
					echo mysqli_num_rows($jumlah_proses);
					?>, 
					<?php 
					$jumlah_selesai = mysqli_query($koneksi,"select * from aduan where status='selesai'");
					echo mysqli_num_rows($jumlah_selesai);
					?>, 
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myJumlah").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Survey", "Pengaduan"],
				datasets: [{
					label: 'Total',
					data: [
					<?php 
					$jumlah_aduan = mysqli_query($koneksi,"select * from survey");
					echo mysqli_num_rows($jumlah_aduan);
					?>, 
					<?php 
					$jumlah_survey = mysqli_query($koneksi,"select * from aduan");
					echo mysqli_num_rows($jumlah_survey);
					?>, 

					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("mySurvey").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Keramahan", "Kecepatan","Solusi","Wawasan","Kepuasan"],
				datasets: [{
					label: 'Point',
					data: [
					<?php 
                    $jumlah_p1 = mysqli_query($koneksi,"select p1 from survey");
                    $total=0;
                    while ($show = mysqli_fetch_array($jumlah_p1)){
                        $total += $show['p1'];
                    }
                    echo $total;
					?>, 
					<?php 
					$jumlah_p2 = mysqli_query($koneksi,"select p2 from survey");
                    $total=0;
                    while ($show = mysqli_fetch_array($jumlah_p2)){
                        $total += $show['p2'];
                    }
                    echo $total;
					?>,
                    <?php 
					$jumlah_p3 = mysqli_query($koneksi,"select p3 from survey");
                    $total=0;
                    while ($show = mysqli_fetch_array($jumlah_p3)){
                        $total += $show['p3'];
                    }
                    echo $total;
					?>,
                    <?php 
					$jumlah_p4 = mysqli_query($koneksi,"select p4 from survey");
                    $total=0;
                    while ($show = mysqli_fetch_array($jumlah_p4)){
                        $total += $show['p4'];
                    }
                    echo $total;
					?>, 
                     <?php 
					$jumlah_p5 = mysqli_query($koneksi,"select p5 from survey");
                    $total=0;
                    while ($show = mysqli_fetch_array($jumlah_p5)){
                        $total += $show['p5'];
                    }
                    echo $total;
					?>, 

					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
   