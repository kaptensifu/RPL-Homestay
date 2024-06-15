<?php

include "koneksi.php";


if(isset($_POST['nama'])) {
    // Tangkap nilai $nama dari form
    $nama = $_POST['nama'];}
$ref = $_POST['ref'];




$queryupdate= mysqli_query($konek, "UPDATE `pesanan` SET `no_referensi` = '$ref' WHERE `nama_pelanggan` = '$nama'");

if ($queryupdate) {
    header("location:konfirmasidp.php");
} else {
    echo "Proses Input gagal";
}
?>