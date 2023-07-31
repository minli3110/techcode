<?php
$title = 'ExploreCS';
$content = '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ExploreConvenienceStore</title>
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
                                    <a href="Transportations.php">Transportation</a>
                                    <a href="Accommodation.php">Accommodation</a>
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
                        <img src="images/ExploreCS.png" alt="7/11_img">
                        <p class="img-txt-top-left" style="color: #2D3138">FOOD</p>
                    </div>
                </section>

                <div class="circle-place">
                    <div class="circle"></div>
                    <div class="circle-text">
                        7-ELEVEN AT LEVEL 3
                    </div>
                </div>

                <p> </p>

                <section>
                    <div class="container">
                        <div class="content">
                            <p>Location: #03-206</p>
                            <p>Directions: Outside PSB Academy Main Wing</p>
                            <p>Operating Hours: 10am to 10pm SGT Daily</p>
                            <p>Student Discounts: Unavailable</p>
                        </div>
                    </div>
                </section>

                <div class="circle-place">
                    <div class="circle">
                        2
                    </div>
                    <div class="circle-text">
                        7-ELEVEN AT LEVEL 1
                    </div>
                </div>

                <p> </p>

                <section>
                    <div class="container">
                        <div class="content">
                            <p>Location: #01-206</p>
                            <p>Directions: Near The Taxi Stand</p>
                            <p>Operating Hours: Open 24 Hours Daily</p>
                            <p>Student Discounts: 5% Off Every $20 Spent</p>
                        </div>
                    </div>
                </section>

                <h1 style="font-size: 3vw; font-weight: 800; color: #2D3138;"><b>Browse Other Food Options</b></h1>

                <section>
                    <div class="browse">
                        <img src="images/BrowseFF1.png" alt="Browse Fast Food">
                        <h3>FAST FOOD</h3>
                        <button class="button">Select</button>
                    </div>

                    <div class="browse">
                        <img src="images/BrowseCOFF2.png" alt="Browse Coffee">
                        <h3>COFFEE</h3>
                        <button class="button">Select</button>
                    </div>

                    <div class="browse">
                        <img src="images/BrowseWEST3.png" alt="Browse Western">
                        <h3>WESTERN</h3>
                        <button class="button">Select</button>
                    </div>

                    <div class="browse">
                        <img src="images/BrowseBAKE4.png" alt="Browse Bakery">
                        <h3>BAKERY</h3>
                        <button class="button">Select</button>
                    </div>

                    <div class="browse">
                        <img src="images/BrowseFC5.png" alt="Browse Food Court">
                        <h3>FOODCOURT</h3>
                        <button class="button">Select</button>
                    </div>
                </section>
                
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