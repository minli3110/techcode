<?php
$title = 'StudentClubs';
$content = '<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Student Clubs</title>
		<link rel="stylesheet" href="Page.css"> <!-- Linking the external CSS file -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="blue-background">
			<div class="content">
				<header class="sticky-header">
					<div class="logo">
						<a href="index.php"><img src="images/UON_logo.png" alt="logo"></a>
					</div>
					<nav>
						<ul class="nav_links">
						<li><a href="index.php">Homepage</a></li>
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
							<img src="images/Studentclub.png" alt="studentclub_img">
							<p class="img-txt-top-left">STUDENT CLUB</p>
						</div>
					</section>
					<section>
						<h2 style="font-size:4.5vw;font-weight:800;margin-left:10%;margin-right:10%;margin-bottom:7.5%;">Industry Student Chapter</h2>
						<div class="club_logo">
							<div class="club_container">
								<div class="club_info">
									<img src="images/IES_PSBA.png" alt="IES_PSBA">
									<p>IES-PSBA Student Chapter</p>
								</div>
								<div class="club_info">
									<img src="images/IET_PSB.png" alt="IET_PSB">
									<p>IET PSB Academy On Campus</p>
								</div>
								<div class="club_info">
									<img src="images/PSB_IPRS.png" alt="PSB_IPRS">
									<p>PSB Academy IPRS & Media Club</p>
								</div>
								<div class="club_info">
									<img src="images/UON_student_council.png" alt="UON_student_council">
									<p>UON Student Council</p>
								</div>
							</div>
						</div>
						<h2 style="font-size:4.5vw;font-weight:800;margin-left:10%;margin-right:10%;margin-bottom:7.5%;">Specialized Club</h2>
						<div class="club_logo">
							<div class="club_container">
								<div class="club_info">
									<img src="images/google_dev_PSB.png" alt="google_dev_PSB">
									<p>Google Developer Student Club PSB Academy</p>
								</div>
								<div class="club_info">
									<img src="images/Leader_dvlpmt_club.png" alt="Leader_dvlpmt_club">
									<p>Leadership Development Club</p>
								</div>
								<div class="club_info">
									<img style="max-width:350px" src="images/SCS.png" alt="SCS">
									<p>Singapore Computer Society</p>
								</div>
							</div>
						</div>
						<h2 style="font-size:4.5vw;font-weight:800;margin-left:10%;margin-right:10%;margin-bottom:7.5%;">International Club</h2>
						<div class="club_logo">
							<div class="club_container">
								<div class="club_info">
									<img src="images/chinese_std_club.png" alt="chinese_std_club">
									<p>Chinese Student Club</p>
								</div>
								<div class="club_info">
									<img src="images/global_std_club.png" alt="global_std_club">
									<p>Global Student Club</p>
								</div>
							</div>
						</div>
						<div class="club_logo">
							<div class="club_container">
								<div class="club_info">
									<img src="images/indonesian_std_club.png" alt="indonesian_std_club">
									<p>Indonesian Student Club</p>
								</div>
								<div class="club_info">
									<img src="images/south_asian_std_club.png" alt="south_asian_std_club">
									<p>South Asian Student Club</p>
								</div>
								<div class="club_info">
									<img src="images/vietnam_std_club.png" alt="vietnam_std_club">
									<p>Vietnamese Student Club</p>
								</div>
							</div>
						</div>
						
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
					</section>
				</main>
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