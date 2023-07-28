<?php
$title = 'Homepage';
$content = '<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Homepage</title>
		<link rel="stylesheet" href="Page.css"> <!-- Linking the external CSS file -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="blue-background">
			<div class="content">
				<header>
					<div class="logo">
						<a href="Homepage.php"><img src="images/UON_logo.png" alt="logo"></a> <!-- Fixed "alr" attribute to "alt" -->
					</div>
					<nav>
						<ul class="nav_links">
							<li><a href="AboutUs.php">About Us</a></li>
							<li>
								<a href="#">Services</a>
								<div class="dropdown-content">
									<a href="Food.php">Food</a>
									<a href="Transportations.php">Transportation</a>
									<a href="Accomodation.php">Accommodation</a>
									<a href="Places_to_go.html">Places To Go</a>
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
							<img src="images/group_img.png" alt="group_img">
						</div>
					</section>
					<section>
						<div class="blue-content">
							<h1 style="font-size: 3.5vw;font-weight: 800;color: #2D3138;">WHAT IS THIS WEBSITE FOR?</h1>
							<img src="images/resource1.png" alt="resource1">
							<p style="font-size: 2vw;color: #2D3138; margin: 20px;">This Website is The Ultimate Fun Guide For Freshmen to Discover Life at UON SG!</p>
						</div>
					</section>
					<br>
					<section>
						<div class="content_img" style="display: flex;">
							<h2 style="font-size:4vw;color:#3431A6;text-align:left;padding:20px;margin: auto 0;margin-left:10px"><b>Fun Facts About UON SG</b></h2>
							<img src="images/resource2.png" alt="resource2" style="margin-left: auto;float:right;width: 25%;height: auto;padding:20px;object-fit: cover;justify-content: felx-end;" >
						</div>
						<div class="blue-line" style="display:flex;">
							<h2>UNIQUE ACADEMIC EXPERIENCE</h2> 
							<p>It offers a unique academic experience where students can earn an Australian degree while studying in the vibrant city-state of Singapore.</p>
						</div>
						<div class="blue-line" style="display:flex;">
							<h2>EASY ACCESS OF SG’S CBD AREA</h2> 
							<p>The campus is located at the heart of Singapore&apos;s central business district, giving students easy access to must-see attractions like Marina Bay Sands.</p>
						</div>
						<div class="blue-line" style="display:flex;">
							<h2>DIVERSE COMMUNITY</h2> 
							<p>UON Singapore is home to a diverse community of students from over 40 countries, providing a rich multicultural experience for students.</p>
						</div>
						<div class="blue-line" style="display:flex;">
							<h2>FULLY EQUIPPED FACILITIES</h2> 
							<p>UON’s SG campus has state-of-the-art facilities, including a fully equipped gym and student lounge, providing a perfect balance of academic and social life.</p>
						</div>
					</section>

					<h2 style="font-size:4vw; font-weight: 800; margin-top:50px;">UON SG CAMPUS</h2>
					<img src="images/UON_sg_campus.png" alt="UON_Campus_img" style="justify-content:center; max-width: 80%;">

					<br>

					<h2 style="font-size:4vw; font-weight: 800; margin-top:50px;">Testimonials</h2>
					<div class="testimonial_video">
						<video controls>
							<source src="video/testimonial.mp4" type="video/mp4">
						</video>
					</div>
					<div class="wrapper">
						<div class="carousel">
							<div class="slide">
								<img src="images/Kim.png" alt="img">
								<div class="content">
									<h3>Kim Sung Yeon</h3>
									<p>Bachelor of Information Technology</p>
									<p>"Hi Kim! I chose Singapore for its IT and financial business opportunities. Studying abroad with a friend has been fulfilling. I&apos;ve learned Chinese, developed mobile apps, and helped elementary school students. Group assignments can be challenging, but teamwork maximizes results. Mel Goh, our lecturer, shares valuable experiences, turning fears into hopeful expectations for graduation. Singapore has allowed me to pursue my passion, gain practical skills, and receive insightful teachings. I&apos;m excited and prepared for the future."</p>
								</div>
							</div>
							<div class="slide">
								<img src="images/Muhil.png" alt="img">
								<div class="content">
									<h3>Muhilan Elangovan</h3>
									<p>Bachelor of Information Technology</p>
									<p>"I&apos;m Muhilan from Singapore, passionate about computer science and its promising career opportunities. I excel in time management, balancing freelance projects with my studies. Collaborating on group assignments is enjoyable for me. My interactive lecturer Mel Goh, provides valuable career insights and goes beyond in supporting us. Canvas resources meet my needs. Grateful for the opportunities and support. Thank you."</p>
								</div>
							</div>
							<div class="slide">
								<img src="images/img-4.jpg" alt="img">
								<div class="content">
									<h3>Hoo Wei Xuan Shawn</h3>
									<p>Bachelor of Information Technology</p>
									<p>"I graduated from Newcastle Singapore with a Bachelor&apos;s degree in Information Technology. I&apos;m passionate about computers and programming. I prioritize my studies, dedicating two hours daily to studying and completing coursework. Despite mostly having online classes due to the MCO, my most memorable experience was when we transitioned to face-to-face classes. Meeting my friends, classmates, and lecturer in person was fantastic. The UON library has been a valuable resource for my studies."</p>
								</div>
							</div>
							<div class="slide">
								<img src="images/dpm_img.png" alt="Evas Image">
								<div class="content">
									<h3>Eva Lily Phillip</h3>
									<p>Bachelor of Information Technology</p>
									<p>"Hello, I&apos;m Eva, an adult now, pursuing my passion for Information Technology. I chose this field because I believe it offers valuable employment opportunities. If you have any advice for staying awake during twilight hours, please share. Recently, I had an unexpected encounter with a lecturer, making it a memorable experience I wouldn&apos;t necessarily want to repeat. Nevertheless, I&apos;m grateful for the supportive lecturers who have been incredibly helpful during last-minute clarifications, making my academic journey enjoyable."</p>
								</div>
							</div>
						</div>
					</div>
					<section>
						<div class="blue-line">
							<h2>UON Industry and Partners</h2>
						</div>
						<br>
						<div class="partners" style="display: flex; flex-wrap: wrap;">
							<img src="images\SCS.png" alt="SCS_img">
							<img src="images\CPA.png" alt="CPA_img">
						</div>
						<div class="partners" style="display: flex; flex-wrap: wrap;">
							<img src="images\iosh.png" alt="iosh_img">
							<img src="images\Engineer_aus.png" alt="Engi_aus_img">
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
        <script src="script.js"></script>
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