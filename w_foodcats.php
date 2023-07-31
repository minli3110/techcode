<?php 
    $title = 'FOOD';
    require_once 'includes/w_header.php';  
    require_once 'db_connection.php';

    $results = $crud->getCats();
?>

<div class="card mx-auto text-big-light" style="max-width: 780px">
  <img src="images/Food.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title">Food in Marina Square</h1>
  </div>
</div>

<br></br>
<?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
    <div class="card mx-auto" style="max-width: 780px">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="<?php echo empty($r['catpix']) ? "uploads/genfc.png" : $r['catpix'] ;?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h3 class="card-title"><?php echo $r['catname']?> </h3>
            <p class="card-text"><?php echo $r['catdescription']?></p>
        </div>
        </div>
    </div>
    </div>

    <br></br>
    
<?php }?>    






<?php require_once 'includes/footer.php'; ?>
