<?php
session_start(); // Panggil session_start() di paling atas

// Set status berdasarkan parameter atau sesuai kebutuhan
$action = $_GET['action'] ?? ''; 

if ($action == 'open') {
    $_SESSION['status'] = "KAMI BUKA";
} elseif ($action == 'close') {
    $_SESSION['status'] = "KAMI TUTUP";
}

// Output HTML setelah memproses session dan variabel
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Star Hotels Helps you Discover The Perfect Balance
	Of Hospitality, Luxury And
	Comfort.">
	<title>Wim Homestay</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/accesibility.css">
	<link rel="stylesheet" href="./assets/css/index.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
	<style>
		* {
	font-family: 'Source Sans Pro';
}


/*Loader*/
#loader {
	background-color: #d34f4f;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	z-index: 9999;
	display: flex;
	justify-content: center;
	align-items: center;
	transition: ease;
}


#loader svg {
	width: 200px;
}

#loader.none {
	visibility: hidden;
	opacity: 0;
}

.scroll-bar {
	overflow: hidden;
}

.horizontal {
	width: 10%;
	margin: 1em 0 2em 0;
	height: 1px;
	background-color: #d4af37;
	border: none;
}

p {
	font-size: 18px;
}
h2 {
	font-size: 40px;
}
.row {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}
.col {
	padding: 5px;
	flex-wrap: nowrap;
}

.image-col {
	margin-right: 7%;
}

.image-col img {
	margin: 5px;
}

.small-image {
	height: 105px;
}

.large-image {
	height: 227px;
}

.side-by-side-container {
	display: flex;
}

.large-image-container {
	margin-right: 7px;
}

.stacked-image-container {
	display: flex;
	flex-direction: column;
	margin-top: 1px;
}
/* Header section--------------------- */
.page-header-container {
	margin-bottom: 70px;
	text-align: center;
}

.page-header-span {
	display: flex;
	justify-content: flex-end;
	padding-right: 100px;
	text-align: center;
}
.page-header {
	/* font-weight: 500; */
	
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	text-align: center;
}

.page-header:after {
	display: block;
	height: 1px;
	background-color: #d4af37;
	content: '';
	width: 90px;
	margin: 0.5em auto 0 auto;
}

.page-sub-header {
	font-size: 75%;
	text-align: center;
	letter-spacing: 0.01em;
	font-weight: 300;
	color: #3b331a;
}

/* Header End-------------------------------- */

/* Jumbotron class */
.jumbotron-container {
	width: 100%;
	background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
		url('assets/img/covernew.jpg');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	opacity: 0.9;
	min-height: calc(100vh - 12vh);
	display: flex;
	color: rgb(255, 255, 255);
}

.jumbotron-left {
	flex: 3;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding-left: 1%;
	text-align: center;
	
	/* border: 1px solid white; */
}

.jumbotron-left > * {
	margin: 0.5rem;
}

.jumbotron-header {
	text-transform: capitalize;
	text-align: center;
}



/* Beginning of enjoy your stay section */
.enjoy-container {
	width: 80%;
	margin: 1em auto;
	display: flex;
	flex-direction: column;
	justify-content: center;
}
.enjoy-header {
	
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.enjoy-header h2 {
	padding-top: 2em;
	text-align: center;
	
}
.enjoy-header > p {
	text-align: center;
}
.enjoy-services {
	display: flex;
	flex-direction: row;
	width: 80%;
	margin: 3em auto;
	margin-bottom: 5em;
	/* border: 1px solid black; */
}
.enjoy-services h2 {
	margin-bottom: 1em;
	
}
.first-col {
	/* border: 1px solid black; */
	flex: 1;
	margin-right: 10em;
}
.sec-col {
	/* border: 1px solid black; */
	flex: 1;
	margin-right: 2em;
}
.third-col {
	/* border: 1px solid black; */
	flex: 2;
	display: flex;
	justify-content: center;
	align-items: center;
	position: relative;
}

.upper,
.lower {
	padding-left: 2em;
	margin-bottom: 2em;
	position: relative;
}
.enjoy__clock-icon,
.enjoy__fitness-icon,
.enjoy__wifi-icon,
.enjoy__coffee-icon {
	position: absolute;
	top: 0px;
	left: -13px;
}

.enjoy__play-icon {
	position: absolute;
	cursor: pointer;
}

/* End----------------------- */

/* Beginning of simplicity is our watch word section styling */
.special-offers {
	padding: 50 0 50px;
	background-color: #FFEFD5;
	
}
.page-header-container {
	
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	text-align: center;
}

.page-header-container h2 {
	padding-top: 2em;
	padding-left: 9%;
	text-align: center;
	
}

.offers-title {
	font-size: 165%;
	margin: 25px 0 15px;
	
}

.offers-sub-title {
	font-size: 18px;
	color: #3b331a;
	font-weight: 300;
	margin-bottom: 20px;
}

.offers-list {
	list-style: none;
	margin-bottom: 30px;
}

.offers-list li {
	margin: 12px 0;
}

.list-icon {
	height: 17px;
	vertical-align: middle;
	margin-right: 5px;
}

.list-text {
	display: inline-block;
}

.btn {
	border-radius: 3px;
	border: 1px solid #d4af37;
	text-transform: uppercase;
	font-size: 55%;
	padding: 10px 18px;
	font-weight: 400;
	text-decoration: none;
	transition: all 0.3s;
	margin-right: 10px;
}

.btn-fill {
	background-color: #d4af37;
	color: #fff;
}
.rates {
	border-radius: 5px;
}

.rates:active,
.rates:hover {
	background-color: #c9a633;
	border: 1px solid #c9a633;
}

.btn-fill:hover,
.btn-fill:active {
	background-color: #c9a633;
	transform: translateY(-3px);
	border: 1px solid #c9a633;
}

.btn-ghost {
	color: #d4af37;
	background-color: #fff;
}

.btn-ghost:hover,
.btn-ghost:active {
	background-color: #d4af37;
	color: #fff;
}

.btn-large {
	font-size: 16px;
	width: 133px;
	padding: 12px 22px;
	border-radius: 4px;
}

/* End----------------------------*/

/* Beginning of client review section styles */
.review-container {
	width: 80%;
	margin: 1em auto;
	display: flex;
	flex-direction: column;
	justify-content: center;
}
.review-header {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding-top: 6em;
}
.review-header > p {
	text-align: center;
}
.cards-container {
	display: flex;
	margin-top: 2em;
	margin-bottom: 4em;
}
.card {
	flex: 1;
	border: 1px solid rgb(158, 158, 158);
	min-height: 40vh;
	margin-right: 2em;
	border-radius: 5px;
	display: flex;
	flex-direction: column;
	align-items: flex-start;
	padding: 1em 1em 1em 1em;
	line-height: 1.5em;
}
.card-title {
	font-size: 25px;
}
.card-avi {
	width: 30%;
	margin: 2em 0;
}
.card-subtitle {
	margin-bottom: 1em;
}
.card-desc {
	font-size: 18px;
	font-weight: 300;
}

/* End----------------------------------------- */

/* @media queries */
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
	.image-col {
		margin: auto;
	}
	.jumbotron-container {
		width: 100%;
		flex-direction: column;
		align-items: center;
	}

	.jumbotron-left {
		padding: 1rem;
		margin-top: 1rem;
	}

	.jumbotron-header {
		font-size: 30px;
		text-align: center;
	}

	.jumbotron-header br {
		display: none;
	}

	.enjoy-services {
		flex-direction: column;
	}
	.enjoy-header,
	.enjoy-container,
	.enjoy-header h1 {
		text-align: center;
	}
	.enjoy-header > p {
		width: 100%;
	}
	/* Enjoy section icons for mobile */
	.enjoy__clock-icon,
	.enjoy__fitness-icon,
	.enjoy__wifi-icon,
	.enjoy__coffee-icon {
		position: unset;
		padding: 0.5rem;
	}
	.page-header {
		text-align: center;
		padding: 1rem;
		font-size: 30px;
	}
	.cards-container {
		flex-direction: column;
	}
	.card {
		margin-bottom: 1em;
	}
	.page-header:after {
		margin: 0.5em auto 0 auto;
		height: 2px;
	}

	.page-header-container {
		margin-bottom: 10px;
	}
	.btn-large {
		margin-bottom: 1em;
		margin: auto;
		font-weight: 700;
		font-size: 77%;
		padding: 15px 27px;
	}

	.horizontal {
		margin: 1em auto 2em auto;
	}
	.jumbotron-form {
		width: 90%;
		margin: 1em auto;
		padding: 1em 0.5em;
	}

	.jumbotron-form h3 {
		font-size: 20px;
		text-align: center;
	}
	.jumbotron-form p {
		font-size: 17px;
	}

	.jumbotron-form p br {
		display: none;
	}
	.jumbotron-left p {
		font-size: 18px;
		width: 100%;
		text-align: center;
		margin-bottom: 1em;
	}

	.jumbotron-right .jumbotron-left,
	.jumbotron-right {
		flex: 1;
	}
	.jumbotron-form button {
		margin-bottom: 1em;
	}

	.enjoy-services {
		margin-bottom: 0.5em;
	}

	.special-offers {
		padding: 0 0 35px;
	}

	.enjoy__play-icon {
		z-index: 2;
		width: 4rem;
		opacity: 0.9;
		height: 4rem;
	}

	.page-header,
	.enjoy-heading {
		text-transform: capitalize;
		text-align: center;
		width: 50%;
	}

	.horizontal {
		height: 2px;
		width: 39%;
	}

	.enjoy-heading {
		margin-top: 20px;
		font-size: 30px;
		text-align: center;
	}

	.enjoy-heading br {
		display: none;
		text-align: center;
	}

	.first-col,
	.sec-col {
		margin-right: unset;
	}

	.upper,
	.lower {
		padding-left: unset;
	}

	.third-col {
		order: -1;
		margin-bottom: 1rem;
	}

	.third-col-video {
		width: 100%;
		filter: drop-shadow(2px 4px 6px black);
	}

	.side-by-side-container {
		flex-direction: column;
	}

	.stacked-image-container {
		flex-direction: row;
	}

	.offers-sub-title {
		padding: 1rem;
	}

	.offers-sub-title br {
		display: none;
	}

	.offers-list {
		margin-left: 1.5rem;
	}

	.centered {
		margin: auto;
		display: block;
		width: 50%;
		text-align: center;
	}

	.img-hide {
		display: none;
	}
	.review-title {
		text-align: center;
		font-size: 30px;
	}

	.card {
		width: 100%;
	}

	.card-avi {
		width: 30%;
		display: block;
		margin: 1.5rem auto;
	}

	.card-title,
	.card-subtitle {
		width: 100%;
		text-align: center;
	}

	.card-subtitle {
		font-weight: 300;
	}
}

@media only screen and (max-width: 320px) {
	.small-image {
		display: none;
	}

	.large-image {
		width: 100%;
		object-fit: cover;
	}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) and (max-width: 700px) {
	.jumbotron-container {
		width: 100%;
		flex-direction: column;
		align-items: center;
	}
	.btn-large {
		margin: 0.5em auto 1em 1em;
	}
	.jumbotron-form {
		width: 100%;
		margin: 1em auto;
		padding: 1em 0.5em;
	}
	.enjoy-header,
	.enjoy-container,
	.enjoy-header h1 {
		text-align: center;
	}
	.enjoy-header > p {
		width: 100%;
	}
	.enjoy-services {
		flex-direction: column;
	}

	.page-header {
		padding: 0 100px 0 100px;
	}

	.card {
		margin-bottom: 1em;
	}
	.page-header:after {
		margin: 0.5em auto 0 auto;
	}
	.btn-large {
		margin-bottom: 1em;
	}
	.jumbotron-left h1 {
		font-size: 50px;
		margin-top: 1em;
	}
	.horizontal {
		margin: 1em auto 2em auto;
	}
}
@media only screen and (min-width: 700px) {
	.jumbotron-form {
		margin: 1em 0;
	}
	.jumbotron-form h3 {
		padding-top: 1em;
		font-size: 25px;
		text-align: center;
	}
	.jumbotron-form p {
		font-size: 18px;
	}

	.rates {
		margin-bottom: 1em;
	}
}
@media only screen and (min-width: 954px) {
	.jumbotron-container {
		width: 100%;
		flex-direction: row;
		align-items: center;
	}
	.enjoy-services {
		flex-direction: row;
	}
}

.table1 {
    font-family: sans-serif;
    color: #fdfff5;
    border-collapse: collapse;
}
 
.table1, th, td {
    border: 3px solid #999;
    padding: 12px 24px;
	background-color: #008000;
}



	</style>
</head>
<body class="scroll-bar">
	<div id="loader">
		<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
			<path fill="#d4af37" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
				<animateTransform 
					attributeName="transform" 
					attributeType="XML" 
					type="rotate"
					dur="1s" 
					from="0 50 50"
					to="360 50 50" 
					repeatCount="indefinite" />
		</path>
		</svg>
	</div>

	

   <header>
      <div class="header-container">
         <nav class="header-nav-bar">
				<div class="header-nav-logo">
					<a href="login.php">
						<img src="./assets/img/homestay.jpg"
							alt="">
					</a>
				</div>
				<ul class="header-nav-lists">
						<li class="header-nav-list">
							<a class="header-nav-link header-active" href="index.php">Beranda</a>
						</li>
						<li class="header-nav-list"><a class="header-nav-link"
								href="rooms-and-suites.php">Kamar</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="facilities.php">Fasilitas dan Ruangan</a></li>
						
						<li class="header-nav-list"><a class="header-btn header-btn-custom" href="book.php">BOOK NOW</a></li>
					</ul>
            
            <div class="header-hamburger-icon">
               <div class="header-hamburger-line-1"></div>
               <div class="header-hamburger-line-2"></div>
               <div class="header-hamburger-line-3"></div>
            </div>
         </nav>
      </div>

      </div>
	</header>

	
	
	<div class="jumbotron-container">
	<div class="jumbotron-left">
			<h2 class="jumbotron-header"> Kenyamanan, <br> Keindahan, dan Keramahan <br>adalah Keutamaan Bagi Kami.</h2>
			<p>Mau cari penginapan yang murah tapi gak murahan?<br>
					Ya, "Wim Homestay" aja, Nikmati keindahan dan kenyamananya</p>
					<?php


$status = $_SESSION['status'] ?? ''; // Membaca status dari session, atau mengembalikan string kosong jika tidak ada

if ($status == 'KAMI BUKA') {?>
	<table class="table1">
		<tr>
			<th>
			"Kita BUKA untuk tanggal <?php echo (date("d F Y")) ?> Langsung booking sekarang!
			</th>
		</tr>
	</table>
	<?php
} elseif ($status == 'KAMI TUTUP'){  ?>
	<table style="font-family: sans-serif;
    color: #fdfff5;
    border-collapse: collapse;">
		<tr>
			<th style="border: 3px solid #999;
    padding: 12px 24px;
	background-color: #FF0000;">
			"Kita TUTUP untuk tanggal <?php echo (date("d F Y")) ?>
			</th>
		</tr>
	</table>
	<?php 
	}  else {?>
		<table class="table1">
			<tr>
				<th>
				"Kita BUKA untuk tanggal <?php echo (date("d F Y")) ?> Langsung booking sekarang!
				</th>
			</tr>
		</table>
		<?php
}
?>		
		</div>
		
	</div>

	<!-- Enjoy your stay in our hotel -->
	<div class="enjoy-container">
		<div class="enjoy-header">
			<h2 class="enjoy-heading">Nikmati Bermalammu <br>di Homestay kami</h2>
			<hr class="horizontal">
			
		</div>
	<div class="enjoy-services">
		<div class="first-col">
			<div class="upper">
					<span>
						<img src="./assets/img/clock.svg" alt="clock icon" class="enjoy__clock-icon">
					</span>
					<h3>24 Jam Service</h3>
					<p>Layanan service homestay tersedia untuk 24 jam.</p>
			</div>
			<div class="lower">
				<span>
					<img src="./assets/img/database.svg" alt="fitness icon" class="enjoy__fitness-icon">
				</span>
				<h3>Garasi</h3>
				<p>Kamu bisa menggunakan garasi untuk 2 mobil kapanpun kamu mau.</p>
			</div>
			
		</div>
		<div class="sec-col">
				<div class="upper">
					<span>
						<img src="./assets/img/coffee.svg" alt="coffee icon" class="enjoy__coffee-icon">
					</span>
						<h3>Mini Bar</h3>
					<p>Kamu bisa menggunakan mini bar untuk keperluanmu</p>
				</div>
				<div class="lower">
					<span>
						<img src="./assets/img/wifi.svg" alt="wifi icon" class="enjoy__wifi-icon">
					</span>
						<h3>Free Wi-Fi </h3>
						<p>Layanan untuk mengakses Wi-Fi sesukamu.</p>
				</div>
		</div>
		
	</div>

	</div>
	<section class="special-offers">
		<!-- Top Text -->
		<div class="page-header-container">

		  <h2 class="page-header">Kenyamanan dan Kebersihan  <br>yang Sudah Terjamin</h2>
	
            
            </div>
			<div class="row center-lg">
				<div class="col image-col right-marg">
					<img src="assets/img/kamar2.jpg" alt="room-image" class="small-image">
					<img src="assets/img/kamar4.jpg" alt="room-image" class="small-image">
					<img src="assets/img/kamar3.jpg" alt="room-image" class="small-image img-hide">
					<div class="side-by-side-container">
						<div class="large-image-container">
							<img src="assets/img/kamar1.jpg" alt="room-image-large" class="large-image">
						</div>
						<section class="stacked-image-container">
						  <div><img src="assets/img/kamar4.jpg" alt="room-image" class="small-image"></div>
						  <div><img src="assets/img/kamar1.jpg" alt="room-image" class="small-image"></div>
						</section>
					</div>
				</div>
				<div class="col">
					<p class="offers-sub-title">
							Kamar yang dilengkapi dengan <br>interior terbaik dan fasilitas yang lengkap <br> Membuat Homestay kami tiada duanya 
					</p>
					<ul class="offers-list">
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Kamar-1</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Kamar-2</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Kamar-3</p>
							</div>
						</li>
					</ul>
					<a href="book.php" class="btn btn-fill btn-large centered">Book Now</a>
				</div>
			</div>
		</section>

	<!-- Client Reviews -->
	<div class="review-container">
		<div class="review-header">
			<h2 class="review-title">
				Review Pelanggan
			</h2>
			<hr class="horizontal">
		</div>
		<div class="cards-container">
				<div class="card">
					<img src="./assets/img/customer1.webp" alt="" class="card-avi">
					
					<h3 class="card-subtitle">
							Pelanggan - 1
					</h3>
					<p class="card-desc">Kata-kata tidak dapat menjelaskan perlakuan baik yang saya terima dari homestay. Mereka adalah yang terbaik di negeri ini.</p>
				</div>
				<div class="card">
					<img src="./assets/img/customer2.webp" alt="" class="card-avi">
					
					<h3 class="card-subtitle">
							Pelanggan - 2
					</h3>
					<p class="card-desc">Wim Homestay membuat anda merasakan kualitas ruangan terbaik yang membuat anda merasakan kenyamanan sebuah rumah.</p>
				</div>
				<div class="card">
					<img 
						src="./assets/img/customer3.webp"  alt="" class="card-avi">
					
					<h3 class="card-subtitle">
							Pelanggan - 3
					</h3>
					<p class="card-desc">Saya dan keluarga sangat senang jika menginap di homestay. Sejauh ini mereka adalah yang terbaik di alam semesta.</p>
				</div>
				

			</div>
	</div>
	<footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">Wim Homestay</h3>
					<p>Kenyamanan, <br> Keindahan, dan Keramahan <br>adalah Keutamaan Bagi Kami.</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Contact Us</h3>
					<p class="footer-description-detail"> 
						<img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>JetisHarjo JT II No.378, Yogyakarta</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
						<span>
					 0812345678</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>wimhomestay@gmail.com</span> </p>
				</div>
				<div class="footer-follow-us">
					<h3 class="footer-description-title">Follow Us</h3>
					<ul class="footer-follow-us-lists">
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/facebook.svg" alt="star hotels facebook page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/twitter.svg" alt="star hotels twitter page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/instagram.svg" alt="star hotels instagram page">
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</footer>
	<script defer async>
		(() => {
			const loader = document.getElementById('loader');
			const scrollBar = document.getElementsByClassName('scroll-bar')[0];
			window.addEventListener('load', () => {
				loader.classList.add('none');
				scrollBar.classList.remove('scroll-bar')
			});
		})();
	</script>
	<script  defer async src="assets/js/toggleHamburger.js"></script>
</body>
</html>