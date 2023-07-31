<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Manage Posts</title>
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
                            <li><button class="sub-btn" onclick="window.location.href='w_foodcats.php'">Food Category</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='addcat.php'">Add Category</button></li>
                        </ul>
                    </li>
                    <li>
                        <button class="dashboard-btn">Accommodate Post</button>
                        <ul class="sub-menu">
                            <li><button class="sub-btn" onclick="window.location.href='w_accommodation.php'">Accommodation</button></li>
                            <li><button class="sub-btn" onclick="window.location.href='addacc.php'">Add Accommodation</button></li>
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
                <h1>Dashboard Posts</h1>
                <button class="add-post-btn" onclick="window.location.href='add_post.php'">Add Post</button>
            </div>

            <div class="post-list" style="grid-template-columns: repeat(2, minmax(0, 1fr));">
                <?php
                    // Include database connection
                    include 'config/db_connection.php';

                    // Connect to database server
                    $dbname = "techcode";  // Change this according to your database name
                    $conn = connectToDatabase($dbname);

                    // Check if the "posts" table exists, and create it if not
                    $tablename = "posts"; // Change this to your desired table name
                    checkAndCreateTable($conn, $tablename);

                    // Fetch posts from the database
                    $sql = "SELECT * FROM posts";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $postId = $row['id'];
                            $title = $row['title'];
                
                            // Read the corresponding PHP file from the "post/" directory
                            $filename = "posts/" . $title . ".php";
                            if (file_exists($filename)) {
                                $content = file_get_contents($filename);
                            } else {
                                $content = "PHP file not found for this post.";
                            }

                            $encoded_content = htmlspecialchars($content);
                
                            // Display each post as a card
                            echo "<div class='post-card' style='border: 1px solid #ccc;border-radius: 5px;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>";
                            echo "<h2>$title</h2>";
                            // Add the div container for the iframe and buttons
                            echo "<div class='iframe-container'>";
                            // Add the iframe with the updated styles
                            echo "<iframe style='pointer-events: none; width: 100%;height:800px;' srcdoc=\"$encoded_content\" class='post-iframe'></iframe>";
                            // Add the div container for the buttons
                            echo "<div class='button-container'>";
                            echo "<a href='edit_post.php?id=$postId' class='edit-btn'>Edit</a>";
                            echo "<a href='delete_post.php?id=$postId' class='delete-btn' onclick='return confirmDelete();'>Delete</a>";
                            echo "</div>"; // Close button-container div
                            echo "</div>"; // Close iframe-container div
                            echo "</div>"; // Close post-card div
                        }
                    } else {
                        echo "<p>No posts found.</p>";
                    }
    
                    // Close database connection
                    mysqli_close($conn);
                ?>
            </div>
        </div>

        <script>
            function confirmDelete() {
                    return confirm("Are you sure you want to delete this page?");
            }

            function confirmLogout() {
                var confirmed = confirm("Are you sure you want to logout?");
                if (confirmed) {
                    window.location.href = "logout.php";
                }
            }
        </script>
    </body>
</html>