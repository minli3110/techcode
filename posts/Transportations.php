<?php
$title = 'Transportations';
$content = '<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Transportations</title>
		<link rel="stylesheet" href="Page.css"> <!-- Linking the external CSS file -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="blue-background">
			<div class="content">
				<header>
					<div class="logo">
						<a href="Homepage.php"><img src="images/UON_logo.png" alt="logo"></a>
					</div>
					<nav>
						<ul class="nav_links">
							<li><a href="Homepage.php">Homepage</a></li>
							<li><a href="AboutUs.php">About Us</a></li>
							<li>
								<a href="#">Services</a>
								<div class="dropdown-content">
									<a href="Food.php">Food</a>
									<a href="Accomodation.php">Accommodation</a>
									<a href="Places_to_go.php">Places To Go</a>
									<a href="StudentClubs.php">Student Club</a>
									<a href="Event.php">Event</a>
								</div>
							</li>
							<li><a href="Academic_Support.php">Academic Support</a></li>
							<li><a href="../admin_login.html">Admin login</a></li>	
						</ul>
					</nav>
				</header>
				<main>
					<section>
						<div class="header_img">
							<img src="images/Transport.png" alt="transport_img">
							<p class="img-txt-top-left" style="color: #2D3138">TRANSPORTATION</p>
						</div>
					</section>
					<section>
						<div class="blue-content" style="margin-bottom: 100px; padding: 10px">
							<h1 style="font-size: 5vw; font-weight: 800; color: #2D3138;"><b>To Get To Campus...</b></h1>
							<div class="transport_icon_cont">
							<div class="transport_icon">
								<img src="images/Bus_icon.png" alt="bus_icon">
								<p>BUS</p>
							</div>
							<div class="transport_icon">
								<img src="images/Mrt_icon.png" alt="mrt_icon">
								<p>MRT</p>
							</div>
							<div class="transport_icon">
								<img src="images/Taxi_icon.png" alt="taxi_icon">
								<p>TAXI</p>
							</div>
							</div>
						</div>
					</section>
					<section>
						<div class="blue-info">
							<img src="images/bus station.png" alt="bus_station" style="width: 100%; height: 100%;">
							<h2>Nearest BUS Station</h2>
							<h3>Bus Stop at Promenade Station/Pan Pacific</h3>
							<p>Bus 36, 36B, 97, 97e, 107M, 961M</p>
							<h3>Bus Stop at The Esplanade or The Float @ Marina Bay</h3>
							<p>Bus 36, 36B, 97, 97e, 107M, 961M, 56, 70M, 75, 77, 106, 111, 133, 162M, 195, 195A, 857</p>
							<h3>Bus Stop at Temasek Boulevard (Suntec Convention)</h3>
							<p>36, 36B, 70A, 70M, 97, 97E, 106, 111, 133, 162M, 502, 502A, 518, 518A, 531, 700A, 857, 868</p>
						</div>

						<div class="blue-info">
							<img src="images/mrt station.png" alt="mrt_station" style="width: 100%; height: 100%;">
							<h2>Nearest MRT Station</h2>
							<h3>Esplanade (CC3)</h3>
							<p>Access Marina Square via our basement integrated walkway - Marina Link which is located just next to Esplanade MRT Station.</p>
							<h3>Promenade (CC4/DT15)</h3>
							<p>Leave the Promenade at Exit B and go through Millenia Walk to Marina Square</p>
							<h3>City Hall (NS25/EW13)</h3>
							<p>Exit A, City Hall To get to Marina Square, go through CityLink Mall</p>
						</div>
						<div class="wrapper">
							<div class="carousel">
								<div class="slide">
									<h3>From Promenade Mrt to PSB Academy Main Campus</h3>
									<video controls>
									  <source src="video/promenade mrt.mp4" type="video/mp4">
									</video>
								</div>
								<div class="slide">
									<h3>From City Hall Mrt to PSB Academy Main Campus</h3>
									<video controls>
								  		<source src="video/city hall mrt.mp4" type="video/mp4">
									</video>
								</div>
								<div class="slide">
									<h3>From Esplanade Mrt to PSB Academy Main Campus</h3>
									<video controls>
										<source src="video/city hall mrt.mp4" type="video/mp4">
									</video>
								</div>
							</div>
						</div>
						<div class="blue-info">
							<img src="images/taxi_img.png" alt="taxi_img" style="width: 100%; height: 100%;">
							<h2>TAXI/Other Transportation</h2>
							<h3>C29 Taxi Stand</h3>
							<p>The Taxi Stand is located near 7-eleven (#01-206) at Level 1 along Raffles Boulevard</p>
							<h3>Online Booking Applications</h3>
							<ul>
							<li>Grab</li>
							<li>GOJEK</li>
							<li>ComfortDelGro</li>
							</ul>
						</div>
					</section>
					<footer class="footer">
						<h2><b>UON SINGAPORE(PSB Academy)</b></h2>
						<address>
							<p>6 Raffles Blvd, #03-200, Singapore 039594</p>
							<p>Phone: <a href="tel:+6562213306">+65 6221 3306</a></p>
							<p>FAX: <a href="tel:+6562213307">+65 6221 3307</a></p>
						</address>
						<div class="footer_sp" style="display: flex;">
							<div class="footer-left" style="text-align: left; justify-content: space-between;">
								<p>The University of Newcastle, Australia (Singapore) 2023</p>
							</div>
							<div class="footer-right">
								<p>Email: <a href=mailto:uonenquiry@newcastle.edu.au>uonenquiry@newcastle.edu.au</a></p>
							</div>
						</div>
					</footer>
				</main>
			</div>
		</div>
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
			<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	</body>
</html>
';
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body><?php echo $content; ?></body>
</html>