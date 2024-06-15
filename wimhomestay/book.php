<?php
session_start();

// Mengakses nilai 'action' dari sesi
if (isset($_SESSION['status'])) {
    $action2 = $_SESSION['status'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wim Homestay</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/accesibility.css">
	<link rel="stylesheet" href="./assets/css/index.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
    <style>

    .jumbotron-right {
	flex: 2;
	display: flex;
	justify-content: flex-start;
	align-items: center;
    padding-left: 20%;
    
	/* border: 1px solid white; */
}

.jumbotron-form {
	color: black;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	background: white;
	width: 70%;
	min-height: 60%;
	border-radius: 5px;
}
.jumbotron-form p {
	margin-bottom: 1em;
	text-align: center;
	font-size: 18px;
}
.jumbotron-form input {
	outline: none;
	width: 80%;
	height: 2.5em;
	padding: 0.5em;
}

.jumbotron-form button {
	background: #d8b74b;
	outline: none;
	width: 80%;
	padding: 0.5em;
	border-radius: 5px;
	cursor: pointer;
	color: white;
	border: none;
}

    </style>
</head>
<body>
<header>
      <div class="header-container">
         <nav class="header-nav-bar">
				<div class="header-nav-logo">
					<a href="index.php">
						<img src="./assets/img/homestay.jpg"
							alt="star hotels logo">
					</a>
				</div>
				<ul class="header-nav-lists">
						<li class="header-nav-list">
							<a class="header-nav-link header-active" href="index.php">Beranda</a>
						</li>
						<li class="header-nav-list"><a class="header-nav-link"
								href="rooms-and-suites.php">Kamar</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="facilities.php">Fasilitas dan Ruangan</a></li>
						
						
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
	<?php 
	if ($action2 == 'KAMI BUKA') {?>
    <div class="jumbotron-right">
			<form method="POST" action="inputbook.php" class="jumbotron-form">
				<!-- Put the form here -->
					<h3>Isilah Form Ini Untuk Booking</h3><br>
					
					<label class="hide" for="arrival">arrival date</label>
					<input type="text" id="arrival" name="arrival" placeholder="Tanggal Check-In" onfocus="(this.type='date')" required><br>
					<label class="hide" for="departure">departure date</label>
					<input type="text"  id="departure" name="departure" placeholder="Tanggal Check-Out" onfocus="(this.type='date')" required><br>
					<label class="hide" for="guests">siapa tamunya</label>
					<input type="text" id="guests" name="nama" placeholder="Nama" required><br>
					<label class="hide" for="children">hp</label>
					<input type="text" id="children" name="no" placeholder="No.HP" required><br>
					<label class="hide" for="email">email</label>
					<input type="text" id="email" name="email" placeholder="Email" required><br>
					<button type="submit" class="rates">BOOKING</button>
			</form>
		</div>
	<?php 
} elseif ($action2 == 'KAMI TUTUP'){  ?>
	<center><table style="font-family: sans-serif;
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
	</center>
	<br>
	<br>
	<?php 
	
	}else {?>
		<div class="jumbotron-right">
				<form method="POST" action="inputbook.php" class="jumbotron-form">
					<!-- Put the form here -->
						<h3>Isilah Form Ini Untuk Booking</h3><br>
						
						<label class="hide" for="arrival">arrival date</label>
						<input type="text" id="arrival" name="arrival" placeholder="Tanggal Check-In" onfocus="(this.type='date')" required><br>
						<label class="hide" for="departure">departure date</label>
						<input type="text"  id="departure" name="departure" placeholder="Tanggal Check-Out" onfocus="(this.type='date')" required><br>
						<label class="hide" for="guests">siapa tamunya</label>
						<input type="text" id="guests" name="nama" placeholder="Nama" required><br>
						<label class="hide" for="children">hp</label>
						<input type="text" id="children" name="no" placeholder="No.HP" required><br>
						<label class="hide" for="email">email</label>
						<input type="text" id="email" name="email" placeholder="Email" required><br>
						<button type="submit" class="rates">BOOKING</button>
				</form>
			</div>
		<?php 
	}

// Output HTML setelah memproses session dan variabel
?>



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
</body>
</html>