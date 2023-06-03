<?php
include 'admin/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (isset($_GET['id'])) {
        $berita_id = $_GET['id'];
    }

    $query = mysqli_query($koneksi, "INSERT INTO `komentar`(`nama_pengirim`, `komentar`, `tgl_komentar`, `id_berita`) VALUES ('$name','$comment', NOW(), '$berita_id')");

    header("Location: details.php?id=$berita_id");
}
