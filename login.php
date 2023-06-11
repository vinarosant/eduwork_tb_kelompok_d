<?php

$session_duration = 900;
session_set_cookie_params($session_duration);

session_start();

include_once 'admin/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE username='$username'");
$query2 = mysqli_query($koneksi, "SELECT * FROM `penulis` WHERE penulis_username='$username'");
$datauser = mysqli_fetch_assoc($query);
$datapenulis = mysqli_fetch_assoc($query2);

if($datauser){
    if ($username == $datauser['username'] && password_verify($password, $datauser['password'])) {
        
        $_SESSION['username'] = $username;
        $_SESSION['expire_time'] = time() + $session_duration;

        header("location:admin/index.php");
        exit();
    } else {
        header("location:index.php?login_failed=true");
        exit();
    }
}else if($datapenulis){
    if ($username == $datapenulis['penulis_username'] && password_verify($password, $datapenulis['penulis_password'])) {
        
        $_SESSION['id_penulis'] = $datapenulis['id_penulis'];
        $_SESSION['nama'] = $datapenulis['nama'];
        $_SESSION['username'] = $username;
        $_SESSION['expire_time'] = time() + $session_duration;

        header("location:penulis/index.php");
        exit();
    } else {
        header("location:index.php?login_failed=true");
        exit();
    }
}else{
    echo "gak ada";
}


    
    

