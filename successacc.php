<?php 
    $title = 'Success-Acc';
    require_once 'includes/header.php';
    require_once 'db_connection.php';
   

    if(isset($_POST['submit'])){
        $aname =$_POST['accname'];
        $add =$_POST['address'];
        $em =$_POST['email'];
        $ph =$_POST['phone'];
        $mrt =$_POST['mrt'];
      

        $orig_file = $_FILES["accpix"]["tmp_name"];
        $ext = pathinfo($_FILES["accpix"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = $target_dir . $aname . "." . $ext;
        move_uploaded_file($orig_file, $destination);

       

        $issuccess = $crud->insertAcc($aname, $add, $em, $ph, $mrt, $destination);

        if($issuccess){
            echo '<h1 class="text-center text-success">Accomodation Added</h1>';
        }
        else{
            echo '<h1 class="text-center text-danger">Add Error</h1>';
        }
    }
?>

<img src="<?php echo $destination?>" style="width: 20%; height: 20%"/>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['accname'] ?></h5>
    <p></p>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_POST['address'] ?></h6>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_POST['email'] ?></h6>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_POST['phone'] ?></h6>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_POST['mrt'] ?></h6>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $destination ?></h6>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
