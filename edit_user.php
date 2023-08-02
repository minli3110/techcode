<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Edit Users</title>
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
            <h1>Edit Users</h1>

            <?php
                include 'config/db_connection.php';

                // Connect to database server
                $dbname = "id21102709_uontechcode";
                $conn = connectToDatabase($dbname);
                
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM users WHERE id = $id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $name = $row['name'];
                        $email = $row['email'];
                    } else {
                        echo "User not found.";
                        exit;
                    }
                } else {
                    echo "Invalid request.";
                    exit;
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $newName = $_POST['name'];
                    $newEmail = $_POST['email'];

                    $updateSql = "UPDATE users SET name = '$newName', email = '$newEmail' WHERE id = $id";

                    if (mysqli_query($conn, $updateSql)) {
                        header("Location: dashboard_users.php"); // Redirect to the dashboard after successful update
                        exit;
                    } else {
                        echo "Error updating user: " . mysqli_error($conn);
                    }
                }
            ?>

            <form method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                </div>
                <div class="button-container">
                    <input type="submit" value="Update">
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

