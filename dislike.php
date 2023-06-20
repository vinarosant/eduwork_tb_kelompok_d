<?php
session_start();
$id_berita = $_GET['id'];
include 'admin/koneksi.php';

$querylike = mysqli_query($koneksi, "SELECT * FROM `like` WHERE id_berita = '$id_berita'");
if (mysqli_num_rows($querylike) > 0) {
    $upquery = mysqli_query($koneksi, "UPDATE `like` SET `jumlah_like` = `jumlah_like` - 1 WHERE `id_berita` = '$id_berita'");
} 

http_response_code(200);
?>

