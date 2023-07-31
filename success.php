<?php 
    $title = 'Success-Cats';
    require_once 'includes/header.php';
    require_once 'db_connection.php';
   

    if(isset($_POST['submit'])){
        $cname =$_POST['catname'];
        $cdesc =$_POST['catdescription'];
      

        $orig_file = $_FILES["catpix"]["tmp_name"];
        $ext = pathinfo($_FILES["catpix"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = $target_dir . $cname . "." . $ext;
        move_uploaded_file($orig_file, $destination);

       

        $issuccess = $crud->insert($cname, $cdesc, $destination);

        if($issuccess){
            echo '<h1 class="text-center text-success">Food Category Added</h1>';
        }
        else{
            echo '<h1 class="text-center text-danger">Add Error</h1>';
        }
    }
?>

<img src="<?php echo $destination?>" style="width: 20%; height: 20%"/>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['catname'] ?></h5>
    <p></p>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_POST['catdescription'] ?></h6>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $destination ?></h6>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
