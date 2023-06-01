<?php

$session_duration = 900;
session_set_cookie_params($session_duration);

session_start();

include_once 'admin/koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM `admin`");
$datauser = mysqli_fetch_assoc($query);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $datauser['username'] && $password == $datauser['password']) {
        $_SESSION['username'] = $username;
        $_SESSION['expire_time'] = time() + $session_duration;

        header("location:admin/index.php");
        exit();
    } else {
        header("location:index.php?login_failed=true");
        exit();
    }
}
?>
