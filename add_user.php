<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Include database connection
        include 'config/db_connection.php';

        // Connect to database server
        $dbname = "techcode";  ########## CHANGE THIS ACCORDINGLY ##########
        $conn = connectToDatabase($dbname);

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if (mysqli_query($conn, $sql)) {
            // User added successfully
            mysqli_close($conn);
            header('Location: dashboard_users.php');
            exit();
        } else {
            echo "Error adding user: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Add Users</title>
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
                            <li><button class="sub-btn" onclick="window.location.href='#'">Add User</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Manage Posts</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='dashboard_posts.php'">View Posts</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='add_post.php'">Add Post</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Food Post</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='w_foodcats.php'">Food Category</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='addcat.php'">Add Category</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Accommodate Post</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='w_accommodation.php'">Accommodation</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='addacc.php'">Add Accommodate</button></li>
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
                <h1>Add User</h1>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="add-user-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="button-container">
                    <button type="submit" class="add-user-btn">Add User</button>
                    <a href="dashboard_users.php" class="cancel-btn">Cancel</a>
                </div>
            </form>

            <script>
                function confirmLogout() {
                    var confirmed = confirm("Are you sure you want to logout?");
                    if (confirmed) {
                        window.location.href = "logout.php";
                    }
                }
            </script>
        </div>
    </body>
</html>
