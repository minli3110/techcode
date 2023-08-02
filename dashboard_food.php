
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
                
            <?php
                $host = 'localhost';
                $db = 'techcode';
                $user = 'root';
                $pass = '';
                $charset = 'utf8mb4';

                $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

                try {
                    $pdo = new PDO($dsn, $user, $pass);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                } catch(PDOException $e) {
                    echo "<h1 class='text-danger'>No Database Found</h1>";
                    //throw new PDOException($e -> getMessage());
                }

                require_once 'db/crud.php';
                $crud = new crud($pdo);
                $results = $crud->getCats();
            ?>

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
                        <a href="edit_cat.php?id=<?php echo $r['cat_id'] ?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Are you sure?');" href="deletecat.php?id=<?php echo $r['cat_id'] ?>" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
            <?php }?>    

            </table>
            
        </div>

     
    </body>
</html>

