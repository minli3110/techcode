<?php
$title = 'AboutUs';
$content = '<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>About Us</title>
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
							<li><a href="#">Services</a>
								<div class="dropdown-content">
									<a href="Food.php">Food</a>
									<a href="Transportations.php">Transportation</a>
									<a href="Accomodation.php">Accommodation</a>
									<a href="Places_to_go.php">Places To Go</a>
									<a href="StudentClubs.php">Student Club</a>
									<a href="Event.php">Event</a>
								</div>
							</li>
							<li><a href="OverseasStd.php">Overseas Student</a></li>
							<li><a href="Academic_Support.php">Academic Support</a></li>
							<li><a href="../admin_login.html">Admin login</a></li>	
						</ul>
					</nav>
				</header>
				<br>
				<main>
					<section>
						<div class="header_img">
							<img src="images/group_img1.png" alt="group_img">
							<p class="img-txt-top-left" style="color: #FFFFFF">About Us</p>
						</div>
					</section>
					<section>
						<div class="content_img" style="display: flex;">
							<h2 style="font-size: 4.5vw; font-weight: 800; color: #3431A6; text-align: left; padding: 20px; margin: auto 0; margin-left: 10px;">MEET THE TEAM...</h2>
							<img src="images/about_us_rcs1.png" alt="abt_us_rcs1" style="margin-left: auto; float: right; max-width: 40%; height: auto; padding: 20px; object-fit: cover; justify-content: flex-end;">
						</div>
					</section>
					<section>
						<div class="the_team">
							<img src="images/pm_img.png" alt="pm_img">
							<div class="team_info">
								<h3>Soon Min Li</h3>
								<p style="color:#979797">Bachelor of Information Technology</p>
								<p>Role: Project Manager</p>
							</div>
						</div>
						
						<div class="the_team">
							<img src="images/dpm_img.png" alt="pm_img">
							<div class="team_info">
								<h3>Eva Lily Phillip</h3>
								<p style="color:#979797">Bachelor of Information Technology</p>
								<p>Role: Deputy Project Manager</p>
							</div>
						</div>
						
						<div class="the_team">
							<img src="images/uid_img.png" alt="pm_img">
							<div class="team_info">
								<h3>Victoria Tan</h3>
								<p style="color:#979797">Bachelor of Information Technology</p>
							  	<p>Role: UI Designer </p>
							</div>
						</div>
						
						<div class="the_team">

							<img src="images/c_img.png" alt="pm_img">
							<div class="team_info">
								<h3>Jordan Kho Shau Kai</h3>
								<p style="color:#979797">Bachelor of Information Technology</p>
							  	<p>Role: Coder</p>
							</div>
						</div>
						
						<div class="the_team">
							<img src="images/r_img.png" alt="pm_img">
							<div class="team_info">
								<h3>Srivengadan Sellathurai</h3>
								<p style="color:#979797"> Bachelor of Information Technology</p>
							  	<p>Role: Researcher</p>
							</div>
						</div>
					</section>
					<section>
						<div class="image-section" style="display: flex; justify-content: flex-end;">
							<img src="images/About_us_rcs2.png" alt="abt_us_rcs2" style="max-width: 40%; height: auto; margin-right: 40px;">
						</div>
					</section>
					<br>
					<section>
						<div class="blue-content" style="position: relative; padding: 20px;">
							<h1 style="font-size: 4vw;font-weight: 800;color: #2D3138;display:flex;justify-content: center;">DEVELOPMENT TOOLS</h1>
                            <div class="image-container" style="display: flex; justify-content: center;">
                                <img src="images/php_img.png" alt="php_img" style="width: 25%; height: 5%; padding-top:55px;">
                                <img src="images/JavaScript-Logo.png" alt="js_img" style="width:30%; padding: 20px;">
                                <img src="images/html_img.png" alt="html_img" style="max-width: 17%; padding: 20px;">
                                <img src="images/css_img.png" alt="css_img" style="max-width: 13%; padding: 20px;">
                            </div>
						</div>
					</section>
					<br>
					<section>
                        <div class="blue-content" style="position:relative;padding:20px;">
                            <h1 style="font-size:4vw; font-weight: 800;color: #2D3138;display:flex;justify-content: center;">PRODUCTIVITY  TOOLS</h1>
                            <img src="images\Discord.png" alt="php_img" style="max-width:23%;align-items:center;padding:20px;">
                            <img src="images\Notion.png" alt="html_img" style="max-width:19%;align-items:center;padding:20px;">
                        </div>
                    </section>
				
					<br>
					
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