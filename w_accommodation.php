<?php 
    $title = 'Accomodation';
    require_once 'includes/w_header.php';  
    require_once 'db_connection.php';

    $results = $crud->getAccs();
?>

<div class="card mx-auto text-big-light" style="max-width: 780px">
  <img src="images/Accomodation.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title">Student Accommodation</h1>
  </div>
</div>

<br></br>
<?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>

    <div class="card mx-auto" style="max-width: 780px">
    <div class="card-body">
        <h3 class="card-title"><?php echo $r['accname']?> </h3>
        <h4 class="card-text"><?php echo $r['address']?></h4>
        <h5 class="card-text">Email: <?php echo $r['email']?></h5>
        <h5 class="card-text">Tel: <?php echo $r['phone']?></h5>
        <h5 class="card-text">Nearest MRT: <?php echo $r['mrt']?></h5>
    </div>
    <img src="<?php echo empty($r['accpix']) ? "uploads/genfc.png" : $r['accpix'] ;?>" class="card-img-top" alt="...">
    </div>

    <br></br>
    
<?php }?>    






<?php require_once 'includes/footer.php'; ?>
