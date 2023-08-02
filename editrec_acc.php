<?php

require_once 'db/conn.php';

    if(isset($_POST['submit'])){

        $id =$_POST['id'];
        $aname =$_POST['accname'];
        $aadd =$_POST['address'];
        $aemail =$_POST['email'];
        $aphone =$_POST['phone'];
        $amrt =$_POST['mrt'];
       

        $result = $crud->editAcc($id, $aname, $aadd, $aemail, $aphone, $amrt);

        if($result){
            header("Location: dashboard_acc.php");
        } else{
            echo 'error';
        }



    } else{
        echo 'error';
    }
?>