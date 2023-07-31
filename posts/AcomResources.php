<?php
$title = 'AcomResources';
$content = '<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8">
    <title>AcomResources</title>
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
            <div class="title-bar">
              <h2>Availability</h2>
              <button class="button">&#x270E; Start A Discussion</button>
            </div>

            <img src="images/AccAvail.png" alt="Availability Image">
          </section>

          <section>
            <div class="container" style="overflow-x:auto">
              <table> 
                <tr>
                  <td>Dorm Description:</td>
                  <td>5 Rooms, 1 Kitchen, 3 Bunk Beds, 1 Bathroom, Max 6 Occupants</td>
                </tr>
                <tr>
                  <td>Application Period:</td>
                  <td>May 2, 2023 To July 5, 2023</td>
                </tr>
              </table>
            </div>
          </section>

          <section>
            <div class="title-bar">
              <h2>Eligibility</h2>
              <button class="button">&#x270E; Start A Discussion</button>
            </div>

            <img src="images/AccEli.png" alt="Eligibility Image">
          </section>

          <section>
            <div class="container" style="overflow-x:auto">
              <table> 
                <tr>
                  <td>Gender:</td>
                  <td>Female Only</td>
                </tr>
                <tr>
                  <td>Age:</td>
                  <td>Open To Students Aged 18 And Up</td>
                </tr>
                <tr>
                  <td>Citizenship:</td>
                  <td>International Students Must Comply With Visa And Immigration Regulations</td>
                </tr>
              </table>
            </div>
          </section>

          <section>
            <div class="title-bar">
              <h2>Policies</h2>
              <button class="button">&#x270E; Start A Discussion</button>
            </div>

            <img src="images/AccPoli.png" alt="Policies Image">
          </section>

          <section>
            <div class="container" style="overflow-x:auto">
              <table> 
                <tr>
                  <td>Pets:</td>
                  <td>No pets allowed except approved service animals</td>
                </tr>
                <tr>
                  <td>Smoking:</td>
                  <td>Smoke-Free Area, No Smoking Indoors Or Outdoors</td>
                </tr>
                <tr>
                  <td>Guests:</td>
                  <td>Visitors Only Allowed During Specified Hours, Accompanied By Residents</td>
                </tr>
              </table>
            </div>
          </section>

          <section>
            <div class="title-bar">
              <h2>Payment</h2>
              <button class="button">&#x270E; Start A Discussion</button>
            </div>

            <img src="images/AccPay.png" alt="Payment Image">
          </section>

          <section>
            <div class="container" style="overflow-x:auto">
              <table> 
                <tr>
                  <td>Installment Options:</td>
                  <td>Flexible Payment Plans Available</td>
                </tr>
                <tr>
                  <td>Payment Methods:</td>
                  <td>Online Payment, Bank Transfer, And Credit/Debit Cards Accepted</td>
                </tr>
                <tr>
                  <td>Refund Process:</td>
                  <td>Guidelines For Requesting Refunds, Subject To Specified Conditions</td>
                </tr>
              </table>
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