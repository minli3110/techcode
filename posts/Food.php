<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8">
    <title>Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

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

          <?php
                $host = 'localhost';
                $db = 'techcode';
                $user = 'root';
                $pass = '';
                $charset = 'utf8mb4';

                $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

                try {
                    $pdo = new PDO($dsn, $user, $pass);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                } catch(PDOException $e) {
                    echo "<h1 class='text-danger'>No Database Found</h1>";
                    //throw new PDOException($e -> getMessage());
                }

                require_once '../db/conn.php';
                $crud = new crud($pdo);
                $results = $crud->getCats();
            ?>
<br></br>

    <br></br>

    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
    
        <section>
            <div class="container">
            <img src="<?php echo empty($r['catpix']) ? "uploads/genfc.png" : $r['catpix'] ;?>" class="img-fluid rounded-start" alt="...">
            
              <div class="content">
                <h3><?php echo $r['catname']?></h3>
                <p><?php echo $r['catdescription']?></p>
              </div>
            </div>

          </section> 
        
    <?php }?>       


          
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

<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body><?php echo $content; ?></body>
</html>