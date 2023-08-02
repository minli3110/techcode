<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Include database connection
        include 'config/db_connection.php';

        // Connect to database server
        $dbname = "id21102709_uontechcode"; // Change this according to your database name
        $conn = connectToDatabase($dbname);

        // Process the form data and add the post to the database
        $title = $_POST["title"];
        $content = $_POST["content"];

        // Prevent HTML code from being executed by escaping it before storing it in the database
        $escaped_content = htmlspecialchars($content);

        // Prepare and execute the query to insert the post
        $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $title, $escaped_content);
        if (mysqli_stmt_execute($stmt)) {
            // Post added successfully
            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            // Create a corresponding PHP file for the post
            $postFileName = $title . '.php';
            $postFilePath = 'posts/' . $postFileName;
            $phpContent = "<?php\n\$title = '$title';\n\$content = '$content';\n?>\n<!DOCTYPE html>\n<html>\n<head>\n<title><?php echo \$title; ?></title>\n</head>\n<body><?php echo \$content; ?></body>\n</html>";
            file_put_contents($postFilePath, $phpContent);

            header("Location: dashboard_posts.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Posts</title>
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
                            <li><button class="sub-btn" onclick="window.location.href='#'">Add Post</button></li>
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
                <h1>Add Post</h1>
            </div>
            <form class="add-post-form" method="post">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" placeholder="Page name" required>
                <label for="content">Content:</label>
                <textarea id="content" name="content" placeholder="HTML Codes" rows="5" required style="height: 900px"></textarea>
                <button type="submit">Add Post</button>
                <a href="dashboard_posts.php" class="cancel-btn">Cancel</a>
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