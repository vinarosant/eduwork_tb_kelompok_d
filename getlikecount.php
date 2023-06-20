<?php
session_start();
$id_berita = $_GET['id'];

include 'admin/koneksi.php';

$querylike = mysqli_query($koneksi, "SELECT * FROM `like` WHERE `id_berita` = '$id_berita'");

if (mysqli_num_rows($querylike) > 0) {
    $row = mysqli_fetch_assoc($querylike);
    $jumlah_like = $row['jumlah_like'];
    echo $jumlah_like;
} else {
    echo 0;
}
?>
