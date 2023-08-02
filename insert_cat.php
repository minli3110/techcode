<?php 
    require_once 'db/conn.php';
   

    if(isset($_POST['submit'])){
        $cname =$_POST['catname'];
        $cdesc =$_POST['catdescription'];
      

        $orig_file = $_FILES["catpix"]["tmp_name"];
        $ext = pathinfo($_FILES["catpix"]["name"], PATHINFO_EXTENSION);
        $new_file = "uploads/". $cname . "." . $ext;
        $target_dir = 'posts/uploads/';
        $destination = $target_dir . $cname . "." . $ext;
        move_uploaded_file($orig_file, $destination);

       
        $crud = new crud($pdo);
        $issuccess = $crud->insert($cname, $cdesc, $new_file);

        if($issuccess){
                header("Location: dashboard_food.php");
            } else {
                echo 'error';
            }
    }
?>