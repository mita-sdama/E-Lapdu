<?php
include "../connection.php";
$id = $_GET['id'];
mysqli_query($koneksi, "UPDATE aduan SET status='proses' WHERE id_aduan = '$id'");
header("location:aduan_lapor.php?pesan=edit");
?>