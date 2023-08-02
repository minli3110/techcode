<?php
$title = 'Food';
$content = '<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8">
    <title>Food</title>
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
                  <a href="Transportations.php">Transportation</a>
                  <a href="Accommodation.php">Accommodation</a>
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
              <img src="images/Food.png" alt="food_img">
              <p class="img-txt-top-left" style="color: #2D3138">FOOD</p>
            </div>
          </section>

          <h1 style="font-size: 5vw; font-weight: 800; color: #2D3138;"><b>Food in Marina Square</b></h1>

          <section>
            <div class="container">
              <img src="images/imConvStore.png" alt="Convenience Store">
              <button class="button">Explore</button>
              <div class="content">
                <h3>CONVENIENCE STORE</h3>
                <p>7-Eleven is your one-stop shop for student essentials like snacks, beverages, personal care products and other necessities.</p>
              </div>
            </div>

            <div class="container">
              <img src="images/imFastFood.png" alt="Fast Food">
              <button class="button">Explore</button>
              <div class="content">
                <h3>FAST FOOD</h3>
                <p>Pizza Hut&apos;s delicious meals, McDonald&apos;s timeless favorites, and Burger King&apos;s flame-grilled delights offer students an enticing variety of affordable options designed to satisfy their taste buds.</p>
              </div>
            </div>

            <div class="container">
              <img src="images/imCoffee.png" alt="Coffee">
              <button class="button">Explore</button>
              <div class="content">
                <h3>COFFEE</h3>
                <p>La Coffee, dal.komm COFFEE, and Starbucks Coffee offer a range of energizing brews and treats, perfect for late-night study sessions or last-minute revisions.</p>
              </div>
            </div>

            <div class="container">
              <img src="images/imWestern.png" alt="Western">
              <button class="button">Explore</button>
              <div class="content">
                <h3>WESTERN</h3>
                <p>Saizeriya and Han&apos;s supply students with a tantalizing variety of affordable dishes from authentic Italian cuisine to diverse and Asian-inspired comfort food.</p>
              </div>
            </div>

            <div class="container">
              <img src="images/imBakery.png" alt="Bakery">
              <button class="button">Explore</button>
              <div class="content">
                <h3>BAKERY</h3>
                <p>Indulge your sweet tooth at Victoria Bakery & Cafe in Marina Square, where an enticing selection of freshly baked treats and confections awaits.</p>
              </div>
            </div>

            <div class="container">
              <img src="images/imFoodcourt.png" alt="Food Court">
              <button class="button">Explore</button>
              <div class="content">
                <h3>FOOD COURT</h3>
                <p>The convenience, affordability, and diverse meal options at Encik Tan and Gourmet Paradise @ The Dining Edition, make them favorite gathering spots for students.</p>
              </div>
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