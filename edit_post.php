<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        // Include database connection
        include 'config/db_connection.php';

        // Connect to the database server
        $dbname = "id21102709_uontechcode"; // Change this according to your database name
        $conn = connectToDatabase($dbname);

        // Get the post ID from the URL parameter
        $postId = $_GET["id"];

        // Retrieve the post details from the database based on the post ID
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $postId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $post = mysqli_fetch_assoc($result);

        // Close the prepared statement
        mysqli_stmt_close($stmt);

        // Close the database connection
        mysqli_close($conn);
    }

    // Check if the form is submitted for updating the post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Include database connection
        include 'config/db_connection.php';

        // Connect to the database server
        $dbname = "id21102709_uontechcode"; // Change this according to your database name
        $conn = connectToDatabase($dbname);

        // Process the form data and update the post in the database
        $postId = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];

        // Prevent HTML code from being executed by escaping it before storing it in the database
        $escaped_content = htmlspecialchars($content);

        $sql = "UPDATE posts SET title = ?, content = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $title, $escaped_content, $postId);
        if (mysqli_stmt_execute($stmt)) {
            // Post updated successfully
            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            // Update the corresponding PHP file for the post
            $postFileName = $title . '.php';
            $postFilePath = 'posts/' . $postFileName;
            $phpContent = "<?php\n\$title = '$title';\n\$content = '$content';\n?>\n<!DOCTYPE html>\n<html>\n<head>\n<title><?php echo \$title; ?></title>\n</head>\n<body><?php echo \$content; ?></body>\n</html>";
            file_put_contents($postFilePath, $phpContent);

            header("Location: dashboard_posts.php");
            exit();
        } else {
            echo "Error updating post: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Post</title>
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
            <div class="header">
                <h1>Edit Post</h1>
            </div>

            <?php if (isset($post)) : ?>
                <div class="edit-post-form">
                    <form class="add-post-form" method="post">
                        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" placeholder="Page name" value="<?php echo $post['title']; ?>" required>
                        <label for="content">Content:</label>
                        <textarea id="content" name="content" placeholder="HTML Codes" rows="5" required style="height: 900px"><?php echo $post['content']; ?></textarea>
                        <button type="submit">Update Post</button>
                        <a href="dashboard_posts.php" class="cancel-btn">Cancel</a>
                    </form>
                </div>
            <?php endif; ?>

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
