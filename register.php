<?php 
include 'admin/koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$conf = $_POST['conf'];

if($conf!=$password){
    header("location:index.php?pesan=conf");
}else{
    $newpass = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($koneksi,"INSERT INTO user VALUES(NULL,'$username','$newpass','$nama')");
    
    if($query){
        header("Location:index.php?pesan=berhasilregister");
    }else{
        header("location:index.php?pesan=gagalregister");
    }
}
?>