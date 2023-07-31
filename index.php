<?php 
    $title = 'View Food Categories';
    require_once 'includes/header.php';  
    //require_once 'includes/auth_check';
    require_once 'db_connection.php';

    $results = $crud->getCats();
?>
   
<h1 class="text-center">Food Categories</h1>

<a href="addcat.php" class="btn btn-success">Add Category</a>
<table class="table">

    <tr>
       
        <th>Name</th>
        <th>Description</th>
        <th>Image File</th>
        <th>Actions</th>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
        <tr>
         
            <td> <?php echo $r['catname']?> </td>
            <td> <?php echo $r['catdescription']?> </td>
            <td> <?php echo $r['catpix']?> </td>
            <td>
                <a href="editcat.php?id=<?php echo $r['cat_id'] ?>" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure?');" href="deletecat.php?id=<?php echo $r['cat_id'] ?>" class="btn btn-danger">Delete</a>

            </td>
        </tr>
    <?php }?>    

</table>


<?php require_once 'includes/footer.php'; ?>
