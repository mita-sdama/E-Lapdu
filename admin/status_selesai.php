<?php
include "../connection.php";
$id = $_GET['id'];
mysqli_query($koneksi, "UPDATE aduan SET status='selesai' WHERE id_aduan = '$id'");
header("location:aduan_proses.php?pesan=edit");
?>