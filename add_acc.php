
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
                <h1>Dashboard - Accommodation</h1>
            </div>
                

            <h1 class="text-center">Add Accomodation</h1>

            <form method="post" action="insert_acc.php" enctype="multipart/form-data">

            <div class="form-group">
            <label for="accname" class="form-label">Accomodation Name</label>
            <input type="text" class="form-control" id="accname" name="accname">
            </div>

            <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
            </div>

            <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
            <label for="phone" class="form-label">Telephone Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
            </div>

            <div class="form-group">
            <label for="mrt" class="form-label">Nearest MRT Station</label>
            <input type="text" class="form-control" id="mrt" name="mrt">
            </div>

            <br>
            <div class="custom-file">
            <label for="accpix">Upload Accomodation Image </label>
            <input type="file" accept="image/*" class="custome-file-input" id="accpix" name="accpix">
            </div>


            <br>
            <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">ADD</button>
            </div>

        </form>
            
        </div>

     
    </body>
</html>

