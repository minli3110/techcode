<?php

require_once 'db_connection.php';

    if(isset($_POST['submit'])){

        $id =$_POST['id'];
        $cname =$_POST['catname'];
        $cdesc =$_POST['catdescription'];
        $cpix =$_POST['catpix'];

        $result = $crud->editCat($id, $cname, $cdesc, $cpix);

        if($result){
            header("Location: index.php");
        } else{
            echo 'error';
        }



    } else{
        echo 'error';
    }
?>