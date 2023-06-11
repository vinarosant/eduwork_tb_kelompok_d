<?php
$perpage=6;

$queryy = isset($_GET['Semua']) ? (int) $_GET['Semua']: 1;

$start = ($queryy > 1) ? ($queryy * $perpage) - $perpage : 0;

$previous = $queryy - 1;
$next = $queryy + 1;


$query1 = ("SELECT * FROM berita LIMIT $start,$perpage");
$result2 = mysqli_query($koneksi, $query1);

$result = mysqli_query($koneksi, "SELECT * FROM `berita` JOIN kategori ON berita.id_kategori = kategori.id_kategori ");
$total=mysqli_num_rows($result);
$resultKesehatan = mysqli_query($koneksi, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Kesehatan'");
$totalkesehatan=mysqli_num_rows($resultKesehatan);
$resultOlahraga = mysqli_query($koneksi, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Olahraga'");
$totalolahraga=mysqli_num_rows($resultOlahraga);
$resultPendidikan = mysqli_query($koneksi, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Pendidikan'");
$totalPendidikan=mysqli_num_rows($resultPendidikan);
$resultPolitik = mysqli_query($koneksi, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Politik'");
$totalPolitik=mysqli_num_rows($resultPolitik);
$resultMakananMinuman = mysqli_query($koneksi, "SELECT * FROM berita JOIN kategori ON berita.id_kategori = kategori.id_kategori WHERE kategori.kategori = 'Makanan dan Minuman' ");
$totalMakananMinuman=mysqli_num_rows($resultMakananMinuman);

if (isset($_GET['Semua'])) {
    $pages= ceil($total/$perpage);
}elseif (isset($_GET['Kesehatan'])) {
    $pages = ceil($totalkesehatan/$perpage);
}elseif (isset($_GET['Olahraga'])) {
    $pages = ceil($totalolahraga/$perpage);
}elseif (isset($_GET['Pendidikan'])) {
    $pages = ceil($totalPendidikan/$perpage);
}elseif (isset($_GET['Politik'])) {
    $pages = ceil($totalPolitik/$perpage);
}elseif (isset($_GET['MakananMinuman'])) {
    $pages = ceil($totalMakananMinuman/$perpage);
}
?>