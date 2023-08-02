<?php 
    $title = 'View Accomodation';
    require_once 'includes/header.php';  
    //require_once 'includes/auth_check';
    require_once 'db_connection.php';

    $results = $crud->getAccs();
?>
   
<h1 class="text-center">Accomodation Options</h1>

<a href="addacc.php" class="btn btn-success">Add Accommodation</a>

<table class="table">

    <tr>
       
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>MRT</th>
        <th>Image File</th>
        <th>Actions</th>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
        <tr>
         
            <td> <?php echo $r['accname']?> </td>
            <td> <?php echo $r['address']?> </td>
            <td> <?php echo $r['email']?> </td>
            <td> <?php echo $r['phone']?> </td>
            <td> <?php echo $r['mrt']?> </td>
            <td> <?php echo $r['accpix']?> </td>
            <td>
                <a href="editcat.php?id=<?php echo $r['acc_id'] ?>" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure?');" href="deleteacc.php?id=<?php echo $r['acc_id'] ?>" class="btn btn-danger">Delete</a>

            </td>
        </tr>
    <?php }?>    

</table>

<?php require_once 'includes/footer.php'; ?>
