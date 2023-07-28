<?php
$title = 'Places_to_go';
$content = '<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="Page.css"> <!-- Linking the external CSS file -->
		<title>Places to go in SG</title>
	</head>
	<body>
		<div class="blue-background">
			<div class="content">
				<header class="sticky-header">
					<div class="logo">
						<img src="images\UON_logo.png" alt="logo">
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
							<img src="images\Placestogo.png" alt="places_to_go_img">
							<p class="img-txt-top-left" style="color: #2D3138; font-size:5.5vw;font-weight:800;">PLACES TO GO IN SG</p>
						</div>
					</section>
					<section>
						<h2 style="font-size:4vw;font-weight:800;margin-left:20%;margin-right:20%;margin-bottom:10%;">6 Popular Places To Go In Singapore</h2>
						<div class="blue-info">
							<img src="images\MBS.png" alt="MBS_img">
							<h2>Marina Bay Sands</h2>
							<p>Marina Bay Sands is a luxurious resort in Singapore with iconic architecture, featuring three towers and a large SkyPark offering panoramic city views. It includes a casino, convention center, high-end shopping mall, multiple restaurants and bars, entertainment options, and an infinity pool.</p>
							<h3>Location:</h3>
							<p>Bayfront Subzone, Downtown Core</p>
							<h3>Nearest MRT:</h3>
							<p>Bayfront/DT16/CE1</p>
						</div>
						<div class="blue-info">
							<img src="images\Merlion.png" alt="Merlion_img">
							<h2>Merlion Park</h2>
							<p>Merlion Park in Singapore is a popular tourist spot with an 8.6-meter-tall statue of a mythical creature called Merlion, symbolizing the city&apos;s history and transformation. The park offers stunning views of the Marina Bay waterfront and is surrounded by iconic landmarks. Visitors can take photos with the statue, enjoy the waterfront scenery, and explore nearby attractions.</p>
							<h3>Location:</h3>
							<p>1 Fullerton Rd, Singapore 049213</p>
							<h3>Nearest MRT:</h3>
							<p>Raffles Place/NS26/EW13</p>
						</div>
						<div class="blue-info">
							<img src="images\Gardens.png" alt="Gardens_img">
							<h2>Gardens By The Bay</h2>
							<p>Gardens by the Bay is a nature park in Singapore with iconic Supertrees, vertical gardens up to 16 stories tall covered in over 162,000 plants. The park also includes two conservatories, the Flower Dome and the Cloud Forest, with a diverse range of plants and ecosystems. Visitors can explore outdoor gardens, walk along the elevated walkway, and attend light and sound shows. A popular attraction for tourists and locals offering a unique nature experience in the city.</p>
							<h3>Location:</h3>
							<p>Downtown Core, Kallang, Marina East</p>
							<h3>Nearest MRT:</h3>
							<p>Bayfront/DT16/CE1</p>
						</div>
						<div class="blue-info">
							<img src="images\Sentosa.png" alt="Sentosa_img">
							<h2>Sentosa Park</h2>
							<p>Sentosa Island in Singapore is a popular island resort with beaches, a Universal Studios theme park, a casino, golf courses, dining options, and many entertainment options. Visitors can enjoy cable car rides, water parks, and adventure activities like ziplining and bungee jumping. A perfect getaway for families and travelers seeking fun, relaxation, and adventure.</p>
							<h3>Location:</h3>
							<p>Sentosa Island</p>
							<h3>Nearest MRT:</h3>
							<p>Harbourfront/CC29/NE1</p>
						</div>
						<div class="blue-info">
							<img src="images\USS.png" alt="USS_img">
							<h2 style="max-width:70%;">Universal Studio Singapore</h2>
							<p>Universal Studios Singapore is a popular theme park located on Sentosa Island in Singapore. It features seven themed zones with 28 rides, shows, and attractions based on popular movies and TV shows. Visitors can enjoy thrilling roller coasters, 3D and 4D simulation rides, live shows, and meet and greets with favorite characters such as Shrek and the Minions. A must-visit destination for families and movie fans looking for a fun and immersive experience.</p>
							<h3>Location:</h3>
							<p>Sentosa Island</p>
							<h3>Nearest MRT:</h3>
							<p>Harbourfront/CC29/NE1</p>
						</div>
						<div class="blue-info">
							<img src="images\Jewel.png" alt="Jewel_img">
							<h2>Jewel Changi Airport</h2>
							<p>Jewel Changi Airport is a multi-use development in Singapore with a stunning glass and steel dome-shaped structure. It features a shopping mall with over 280 stores, restaurants, and entertainment options, as well as the world&apos;s tallest indoor waterfall, the Rain Vortex. Visitors can explore the Canopy Park, which features lush greenery and recreational attractions such as a sky net, hedge maze, and mirror maze. </p>
							<h3>Location:</h3>
							<p>78 Airport Boulevard, SIngapore 819666</p>
							<h3>Nearest MRT:</h3>
							<p>Changi Airport/CG2</p>
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