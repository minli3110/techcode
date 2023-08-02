
<?php 
    require_once 'db/conn.php';
    if(!$_GET['id']) {
        echo 'error';
    } else {
        $id = $_GET['id'];
        
        require_once 'db/crud.php';
        $crud = new crud($pdo);
        $result = $crud->deleteAcc($id);

        if($result) {
            header("Location: dashboard_acc.php");
        } else {
            echo 'error';
        }
    }

?>