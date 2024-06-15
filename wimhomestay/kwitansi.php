<?php
	include 'koneksi.php';
    $id=$_GET['id_pesanan'];
    
	$query = mysqli_query($konek, "select * from pesanan WHERE id_pesanan=$id");
	$data = mysqli_fetch_array($query);
    $email=$data['email'];

    $text1=$data['nama_pelanggan'];  
    $text2=date("Y-m-d");
    $image= imagecreatefromwebp ('./assets/img/kwitansi-kosong.webp');
    $textcolor = imagecolorallocate($image,0,0,0);
    $font = 'Serenata Vantages Regular.ttf';
    $filename = $id .'_'. $text1 .'_'. uniqid() . '.webp';
    $tanggal= date("Y-m-d");
    header('Content-type:image/webp');
    imagettftext($image,50,0,830,1400,$textcolor,$font,$text1);
    imagettftext($image,50,0,1830,1150,$textcolor,$font,$text2);
    imagewebp($image);
    imagewebp($image,$filename);
    
    $query_insert = mysqli_query($konek, "INSERT INTO kwitansi (id_pesanan1, foto_kwitansi, tanggal_dibuat, email1) VALUES ('$id', '$filename', '$tanggal', '$email')");
    
    if($query_insert) {
        echo "Gambar berhasil dibuat dan disimpan ke database.";
    } else {
        echo "Gagal menyimpan gambar ke database.";
    }

    // Hapus gambar dari memori
    imagedestroy($image);

?>  