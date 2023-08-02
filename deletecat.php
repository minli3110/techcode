
<?php 
    require_once 'db/conn.php';
    if(!$_GET['id']) {
        echo 'error';
    } else {
        $id = $_GET['id'];
        
        require_once 'db/crud.php';
        $crud = new crud($pdo);
        $result = $crud->deleteCat($id);

        if($result) {
            header("Location: dashboard_food.php");
        } else {
            echo 'error';
        }
    }

?>