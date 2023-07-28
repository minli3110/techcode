<?php
$title = 'Event';
$content = '<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Event</title>
		<link rel="stylesheet" href="Page.css"> <!-- Linking the external CSS file -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="blue-background">
			<div class="content">
				<header class="sticky-header">
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
									<a href="Transportations.php">Transportation</a>
									<a href="Accomodation.php">Accommodation</a>
									<a href="Places_to_go.html">Places To Go</a>
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
							<img src="images/Event.png" alt="Event">
							<p class="img-txt-top-left">Event</p>
						</div>
					</section>
					<section class="event_container">
						<img src="images/Event_poster.png" alt="Event_poster">
					</section>
				</main>
				<footer class="footer">
					<h2>UON SINGAPORE(PSB Academy)</h2>
					<address>
						<p>6 Raffles Blvd, #03-200, Singapore 039594</p>
						<p>Phone: <a href="tel:+6562213306">+65 6221 3306</a></p>
						<p>FAX: <a href="tel:+6562213307">+65 6221 3307</a></p>
					</address>
					<div class="footer_sp" style="display:flex;">
						<div class="footer-left" style="text-align:left; justify-content:space-between;">
						<p>The University of Newcastle, Australia (Singapore) 2023</p>
						</div>
						<div class="footer-right">
						<p>Email: <a href=mailto:uonenquiry@newcastle.edu.au>uonenquiry@newcastle.edu.au</a></p>
						</div>
					</div>
				</footer>
			</div>
		</div>
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