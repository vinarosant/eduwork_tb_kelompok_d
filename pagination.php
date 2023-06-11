<?php
//pagination
$perpage=4;
$page = isset ($_GET["halaman"]) ? (int)$_GET["halaman"] : 1 ;
$start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

$previous = $page - 1;
$next = $page + 1;

$konten = "SELECT * FROM `berita` JOIN `kategori` ON `berita`.`id_kategori` = `kategori`.`id_kategori` LIMIT $start, $perpage";
$result2 = mysqli_query($koneksi, $konten);

$all = "SELECT * FROM `berita`";
$result = mysqli_query($koneksi, $all);
$total=mysqli_num_rows($result);

$pages = ceil($total/$perpage);


?>