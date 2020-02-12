<?php
include "../connection.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM aduan WHERE id_aduan = '$id'");
header("location:aduan_lapor.php?pesan=hapus");
?>