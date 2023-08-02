<?php

require_once 'db/conn.php';

    if(isset($_POST['submit'])){

        $id =$_POST['id'];
        $cname =$_POST['catname'];
        $cdesc =$_POST['catdescription'];

        $result = $crud->editCat($id, $cname, $cdesc);

        if($result){
            header("Location: dashboard_food.php");
        } else{
            echo 'error';
        }



    } else{
        echo 'error';
    }
?>