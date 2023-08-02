<?php 
    require_once 'db/conn.php';
   

    if(isset($_POST['submit'])){
        $aname =$_POST['accname'];
        $add =$_POST['address'];
        $em =$_POST['email'];
        $ph =$_POST['phone'];
        $mrt =$_POST['mrt'];
      

        $orig_file = $_FILES["accpix"]["tmp_name"];
        $ext = pathinfo($_FILES["accpix"]["name"], PATHINFO_EXTENSION);
        $new_file = "uploads/". $aname . "." . $ext;
        $target_dir = 'posts/uploads/';
        $destination = $target_dir . $aname . "." . $ext;
        move_uploaded_file($orig_file, $destination);

       

        $issuccess = $crud->insertAcc($aname, $add, $em, $ph, $mrt, $new_file);

        if($issuccess){
            header("Location: dashboard_acc.php");
        } else {
            echo 'error';
        }
    }
?>