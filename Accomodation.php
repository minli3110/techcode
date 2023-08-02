<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Accommodations</title>
		<link rel="stylesheet" href="Page.css"> <!-- Linking the external CSS file -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="blue-background">
			<main class="content">
				<header>
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
									<a href="Transportations.php">Transportation</a>
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
				<section>
					<div class="header_img">
						<img src="images\Accomodation_top.png" alt="accommodation_img">
						<p class="img-txt-top-left" style="color: #2D3138">ACCOMMODATIONS</p>
					</div>
				</section>
				<h1 style="font-size: 5vw; font-weight: 800; color: #2D3138;"><b>STUDENT DORMS</b></h1>
				
				<?php

                require_once '../config/db_connection.php';
                $crud = new crud($pdo);
                $results = $crud->getAccs();
            	?>

<?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>

					<section>
					<div class="blue-info">
					<img src="<?php echo empty($r['accpix']) ? "uploads/genac.png" : $r['accpix'] ;?>" class="card-img-top" style="width: 100%; height: 100%;" alt="...">
						<h2><?php echo $r['accname']?></h2>
						<h3>Location:</h3>
						<p><?php echo $r['address']?></p>
						<h3>Nearest MRT:</h3>
						<p><?php echo $r['mrt']?></p>
						<h3>Contact Us:</h3>
						<p>Email: <?php echo $r['email']?></p>
						<p>Tel: <?php echo $r['phone']?></p>
						
					</div>
					</section>

<br></br>

<?php }?>    
				


					

				
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
			</main>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body><?php echo $content; ?></body>
</html>