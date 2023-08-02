<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Manage Users</title>
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
                            <li><button class="sub-btn" onclick="window.location.href='#'">View Users</button></li>
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
                            <li><button class="sub-btn" onclick="window.location.href='dashboard_food.php'">Food Category</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='add_cat.php'">Add Category</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Accommodate Post</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='dashboard_acc.php'">Accommodation</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='add_acc.php'">Add Accommodate</button></li>
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
                <h1>Dashboard Users</h1>
                <button class="add-user-btn" onclick="window.location.href='add_user.php'">Add User</button>
            </div>

            <?php
                // Include database connection
                include 'config/db_connection.php';

                // Connect to database server
                $dbname = "techcode";  ########## CHANGE THIS ACCORDINGLY ##########
                $conn = connectToDatabase($dbname);

                // Check if the "users" table exists, and create it if not
                $tablename = "users"; // Change this to your desired table name
                checkAndCreateTable($conn, $tablename);

                // Fetch users from the database
                $sql = "SELECT * FROM $tablename";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo "<table id='userTable'>";
                    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td><a href='edit_user.php?id=" . $row['id'] . "' class='editBtn'>Edit</a>";
                        echo "<a href='delete_user.php?id=" . $row['id'] . "' class='deleteBtn' onclick='return confirmDelete();'>Delete</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No users  found.";
                }

                // Close database connection
                mysqli_close($conn);
            ?>

            <script>
                function confirmDelete() {
                    return confirm("Are you sure you want to delete this user?");
                }

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
