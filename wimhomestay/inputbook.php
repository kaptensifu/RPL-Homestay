<?php

include "koneksi.php";


$nama = $_POST['nama'];
$no = $_POST['no'];
$check_in = $_POST['arrival'];
$check_out = $_POST['departure'];
$email = $_POST['email'];




$query = mysqli_query($konek, "INSERT INTO `pesanan`(`check_in`, `check_out`, `nama_pelanggan`, `no_HP_pelanggan`, `email`) VALUES ('$check_in','$check_out','$nama','$no','$email')"
) or die(mysqli_error($konek));

if ($query) {
    header("location:konfirmasibook.php?nama=" . urlencode($nama));
    
} else {
    echo "Proses Input gagal";
}
?>