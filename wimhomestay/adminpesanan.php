<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Wim Homestay</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/accesibility.css">
	<link rel="stylesheet" href="./assets/css/index.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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

.footer {
	background-color: #241e09;
	color: #fff;
   min-height: 240px;
   
}

.footer-container {
	max-width: 1200px;
	margin: 0 auto;
	padding: 1.5rem;
	display: flex;
	flex-direction: column;
	justify-content: start;
	min-height: 240px;
	font-size: 18px;
	
}

.footer-nav {
	display: grid;
	justify-items: start;
	grid-gap: 70px;
	grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
	
	
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
							<a class="header-nav-link header-active" href="adminpesanan.php">Data Pesanan</a>
						</li>
						<li class="header-nav-list">
                            <a class="header-nav-link" href="adminkwitansi.php">Data Kwitansi</a>
                        </li>
						<li class="header-nav-list"><a class="header-nav-link" href="adminopen.php">Buka/Tutup</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="logout.php">Logout</a></li>
						
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
    <center>
	<h2>Tabel Pesanan</h2>
	</center>
	
<table class="table table-hover">
  <thead>
    <tr class="table-warning">
      <th scope="col">ID_Pesanan</th>
      <th scope="col">Check-In</th>
      <th scope="col">Check-Out</th>
      <th scope="col">Nama</th>
	  <th scope="col">No.HP</th>
	  <th scope="col">Email</th>
	  <th scope="col">No.Referensi</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
							include 'koneksi.php';
							$query = mysqli_query($konek, "select * from pesanan");
							while ($data = mysqli_fetch_array($query)) { ?>
								<tr>
									<td><?php echo $data['id_pesanan']; ?></td>
									<td><?php echo $data['check_in']; ?></td>
									<td><?php echo $data['check_out']; ?></td>
									<td><?php echo $data['nama_pelanggan']; ?></td>
									<td><?php echo $data['no_HP_pelanggan']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td><?php echo $data['no_referensi']; ?></td>
									<td>
									<a class="btn btn-warning" href="kwitansi.php?id_pesanan=<?php echo $data['id_pesanan'] ?>">Buat Kwitansi</a>
									</td>
								</tr>
							<?php } ?>
  </tbody>
</table>


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
	
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>