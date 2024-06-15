<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wim Homestay - Rooms and Suites</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/global-header.css">
	<link rel="stylesheet" href="./assets/css/global-footer.css">
	<link rel="stylesheet" href="./assets/css/rooms-and-suites.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
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
                        <a class="header-nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="header-nav-list"><a class="header-nav-link header-active"
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

    </header>
    <main>
        <div class="container">

            <!-- Top Text -->
            <div class="page-header-container">
                <h2 class="page-header">Kamar Wim Homestay</h2>
                <hr />
                <p class="page-sub-header">
                    Nikmati dan rasakan kenyamanan kamar <br>
                    hanaya di Wim Homestay
                </p>
            </div>

            <!-- Special offers section -->
            <section class="special-offers">
                <div class="row center-lg">
                    <div class="col image-col right-marg">
                        <img src="assets/img/kamar1.jpg" alt="room-image" class="small-image">
                        <img src="assets/img/kamar2.jpg" alt="room-image" class="small-image">
                        <img src="assets/img/kamar4.jpg" alt="room-image" class="small-image">
                        <div class="side-by-side-container">
                            <div class="large-image-container">
                                <img src="assets/img/kamar1.jpg" alt="room-image-large" class="large-image">
                            </div>
                            <section class="stacked-image-container">
                              <div><img src="assets/img/kamar3.jpg" alt="room-image" class="small-image"></div>
                              <div><img src="assets/img/kamar4.jpg" alt="room-image" class="small-image"></div>
                            </section>
                        </div>
                    </div>
                    <div class="col">
                        <h3 class="offers-title">Best of the best</h3>
                        <p class="offers-sub-title">
                            Kenyamanan dan Kebersihan yang selalu terjaga <br> dengan berbagai fasilitasnya
                        </p>
                        <ul class="offers-list">
                            <li>
                                <div>
                                    <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text">Wi-Fi</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text">AC</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                    <p class="list-text">TV </p>
                                </div>
                            </li>
                        </ul>
                        <a href="book.php" class="btn btn-fill btn-large">BOOK NOW</a>
                    </div>
                </div>
            </section>

            <!-- Rooms -->
            <section class="rooms-section">
                <div class="row room-section-header-container">
                    <div class="col col-3">
                        <h4 class="room-section-header " id="standard-room"></h4>
                    </div>
                    <div class="col col-3">
                        <h2 class="room-section-header active-header" id="executive-room">Berbagai Kamar</h2>
                    </div>
                    
                </div>
                <div class="row center-lg">
                    <div class="rooms col col-2">
                        <img src="assets/img/kamar1.jpg"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 1</h3>
                        
                        <div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">2 Persons</p>
                            </div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">1 big size bed</p>
                            </div>
                        </div>
                        <p class="amount-text">Dirancang khusus untuk Kebersihan dan kenyamanan</p>
                        <div class="buttons-container">
                            <a href="facilities.php" class="btn btn-ghost">Fasilitas</a>
                            
                        </div>
                    </div>
                    <div class="rooms col col-2">
                        <img src="assets/img/kamar2.jpg"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 2</h3>
                        
                        <div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">2 Persons</p>
                            </div>
                            <div class="details-container">
                                <img src="assets/img/bed.png" alt="tick" class="list-icon">
                                <p class="list-text">1 big size bed kasur</p>
                            </div>
                        </div>
                        <p class="amount-text">Dirancang khusus untuk Kebersihan dan kenyamanan</p>
                        <div class="buttons-container">
                            <a href="facilities.php" class="btn btn-ghost">Fasilitas</a>
                            
                        </div>
                    </div>
                    <div class="rooms col col-2">
                        <img src="assets/img/kamar3.jpg"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 3</h3>
                    
                        <div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">2 Persons</p>
                            </div>
                            <div class="details-container">
                                <img src="assets/img/bed.png" alt="tick" class="list-icon">
                                <p class="list-text">1 big size bed</p>
                            </div>
                        </div>
                        <p class="amount-text">Dirancang khusus untuk Kebersihan dan kenyamanan</p>
                        <div class="buttons-container">
                            <a href="facilities.php" class="btn btn-ghost">Fasilitas</a>
                            
                        </div>
                    </div>
                    <div class="rooms col col-2">
                        <img src="assets/img/kamar4.jpg"
                            alt="" class="rooms-img">
                        <h3 class="room-title">Kamar 4</h3>
                        
                        <div>
                            <div class="details-container">
                                <img src="assets/img/check-square.svg" alt="tick" class="list-icon">
                                <p class="list-text">1 Persons</p>
                            </div>
                            <div class="details-container">
                                <img src="assets/img/bed.png" alt="tick" class="list-icon">
                                <p class="list-text">1 small size bed</p>
                            </div>
                        </div>
                        <p class="amount-text">Dirancang khusus untuk Kebersihan dan kenyamanan</p>
                        <div class="buttons-container">
                            <a href="facilities.php" class="btn btn-ghost">Fasilitas</a>
                           
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

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
    <script src="assets/js/switchRooms.js"></script>
    <script src="assets/js/toggleHamburger.js"></script>
</body>

</html>