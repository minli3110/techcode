
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
                <h1>Dashboard - Food Categories</h1>
            </div>
                

            <h1 class="text-center">Edit Food Category</h1>

            <?php 
               
                require_once 'db/conn.php';

                if(!isset($_GET['id'])){
                    echo 'error';
                } else{
                    $id = $_GET['id'];
                    $result = $crud->getCatDetails($id);

            ?>

                    
                    <form method="post" action="editrec_cat.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $result['cat_id'] ?>" />
                        
                        <div class="form-group">
                        <label for="catname" class="form-label">Category Name</label>
                        <input type="text" class="form-control" value ="<?php echo $result['catname'] ?>" id="catname" name="catname">
                        </div>

                        <div class="form-group">
                        <label for="catdescription" class="form-label">Category Description</label>
                        <textarea class="form-control" id="catdescription" rows="3" name="catdescription"><?php echo $result['catdescription'] ?></textarea>
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

