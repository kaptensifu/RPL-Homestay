<?php

include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];
$data = mysqli_query($konek,"SELECT * from akun WHERE username = '$username' and password = '$password'") or die (mysqli_error($connect));

$cek = mysqli_num_rows($data);

if($cek >0){
    $row = mysqli_fetch_assoc($data);
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "login";
    if($row["role"]=="admin"){
        $_SESSION["role"]="admin";
        $_SESSION["id"]=$row["id"];
        header("location:index.php");
    }else{
        header("location:adminpesanan.php");
    }
    
}
else{
    header("location:login.php?pesan=gagal");
}
?>