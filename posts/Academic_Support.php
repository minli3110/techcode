<?php
$title = 'Academic_Support';
$content = '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Academic Support</title>
        <link rel="stylesheet" href="Page.css"> <!-- Linking the external CSS file -->
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
                            <li>
                                <a href="#">Services</a>
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
                <main>
                    <div class="support_container">
                        <h1>Academic Support</h1>
                        <p>
                            Welcome to the Academic Support page. Here you can find valuable information and resources to assist you in your academic journey.
                        </p>
                        <h2>Services Offered</h2>
                        <p>
                            We offer a wide range of academic support services, including but not limited to:
                        </p>
                        <h3><b>UON Library</b></h3>
                        <p>The UON library is a large and comprehensive library that serves the needs of students, staff, and researchers at the university. The library has a collection of over 2 million books, journals, and other materials, as well as a variety of electronic resources. The library also offers a range of services, such as research assistance, interlibrary loans, and document delivery.</p>
                        <h3><b>Counselling</b></h3>
                        <p>PSB Academy is committed to the wellbeing and safety of our students. If you are facing any challenges, please contact our in-house counsellor for support. You can reach us by phone or email, Monday to Friday, 8:30am to 6:00pm.</p>
                        <br>
                        <p>We also have a list of 24-hour crisis helplines and community resources that you can refer to. If you need immediate medical, police, or emergency services assistance, we will contact the relevant authorities.</p>
                        <p class="contact-info">Tel: <a href="tel:+6563909214">6390 9214</a></p>
                        <p class="contact-info">Email: <a href="care@psb-academy.edu.sg">care@psb-academy.edu.sg</a></p>
                        <h3><b>Consultation</b></h3>
                        <p>PSB Hive is available to assist students from 8:30am to 7:30pm, offering guidance and assistance with any challenges they may be facing. For immediate help, students can reach out to the support team via:</p>
                        <p class="contact-info">Email: <a href="mailto:UON_IT@psb-academy.edu.sg">UON_IT@psb-academy.edu.sg</a></p>
                        <p class="contact-info">Phone: <a href="tel:+6562213306">+65 6221 3306</a></p>
                        <p class="contact-info">(The Hive) Office hours: Monday-Friday, 8:30 AM - 7:30 PM</p>
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
                </main>
            </div>
        </div>    
    </body>
</html>';
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body><?php echo $content; ?></body>
</html>