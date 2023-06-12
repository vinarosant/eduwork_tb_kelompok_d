<?php
$perpage=4;
$queryy = (isset($_GET['Semua'])) ? (int) $_GET['Semua'] : 1;

$queryy = $queryy==0 ? 1: $queryy;

$start = ($queryy > 1) ? ($queryy * $perpage) - $perpage: 0;

$previous = $queryy - 1;
$next = $queryy + 1;


$query1 = ("SELECT * FROM berita LIMIT $start,$perpage");
$result2 = mysqli_query($koneksi, $query1);

$result = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN kategori ON berita.id_kategori = kategori.id_kategori ");
$total=mysqli_num_rows($result);

$pages= (isset($_GET['Semua'])) ? ceil($total/$perpage) : 1;

?>