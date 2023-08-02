<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        // Include database connection
        include 'config/db_connection.php';

        // Connect to database server
        $dbname = "id21102709_uontechcode"; // Change this according to your database name
        $conn = connectToDatabase($dbname);

        // Check if the "posts" table exists, and create it if not
        $tablename = "posts"; // Change this to your desired table name
        checkAndCreateTable($conn, $tablename);

        // Get the post ID from the URL parameter
        $postId = $_GET["id"];

        // Retrieve the post details from the database based on the post ID
        $sql = "SELECT * FROM $tablename WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $postId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $post = mysqli_fetch_assoc($result);

        // Close the prepared statement
        mysqli_stmt_close($stmt);

        // Delete the corresponding PHP file for the post from the "posts/" directory
        $postFileName = $post['title'] . '.php';
        $postFilePath = 'posts/' . $postFileName;
        if (file_exists($postFilePath)) {
            unlink($postFilePath); // Delete the file from the server
        }

        // Prepare and execute the query to delete the post from the database
        $sql = "DELETE FROM $tablename WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $postId);
        if (mysqli_stmt_execute($stmt)) {
            // Post deleted successfully
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: dashboard_posts.php"); // Redirect back to the dashboard
            exit();
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close database connection
        mysqli_close($conn);
    } else {
        // If the ID parameter is not provided in the URL, redirect back to the dashboard
        header("Location: dashboard_posts.php");
        exit();
    }
?>
