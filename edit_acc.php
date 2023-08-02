
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Manage Food</title>
        <link rel="stylesheet" type="text/css" href="dashboard.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">
                <a onclick="confirmLogout()" style="cursor: pointer;"><img src="images/UON_logo.png" alt="Logo"></a>
            </div>
            <div class="sidebar-content">
                <ul class="dashboard-menu">

                    <li>
                        <button class="dashboard-btn">Manage Users</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='dashboard_users.php'">View Users</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='add_user.php'">Add User</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Manage Posts</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='#'">View Posts</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='add_post.php'">Add Post</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Food Post</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='dashboard_food.php'">Food Category</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='add_cat.php'">Add Category</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Accommodate Post</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='dashboard_acc.php'">Accommodation</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='add_acc.php'">Add Accommodation</button></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="logout">
                <button class="logout-btn" onclick="confirmLogout()">Log out</button>
            </div>
        </div>

        <div class="container">
            <div class="header">
                <h1>Dashboard - Accomodation</h1>
            </div>
                

            <h1 class="text-center">Edit Accomodation Details</h1>

            <?php 
                
                require_once 'db/conn.php';

                if(!isset($_GET['id'])){
                    echo 'error';
                } else{
                    $id = $_GET['id'];
                    $result = $crud->getAccDetails($id);

            ?>

                    
                    <form method="post" action="editrec_acc.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $result['acc_id'] ?>" />
                       
                        <div class="form-group">
                        <label for="accname" class="form-label">Name</label>
                        <input type="text" class="form-control" value ="<?php echo $result['accname'] ?>" id="accname" name="accname">
                        </div>

                        <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" value ="<?php echo $result['address'] ?>" id="address" name="address">
                        </div>

                        <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" value ="<?php echo $result['email'] ?>" id="email" name="email">
                        </div>

                        <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" value ="<?php echo $result['phone'] ?>" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                        <label for="mrt" class="form-label">Nearest MRT</label>
                        <input type="text" class="form-control" value ="<?php echo $result['mrt'] ?>" id="mrt" name="mrt">
                        </div>
                


                        <br></br>
                        <div class="d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-success btn-lg">SAVE Changes</button>
                        </div>

                    </form>

                    <?php } ?>
            
        </div>

     
    </body>
</html>

