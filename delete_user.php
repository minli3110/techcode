<?php
    include 'config/db_connection.php';

    // Connect to database server
    $dbname = "techcode";  ########## CHANGE THIS ACCORDINGLY ##########
    $conn = connectToDatabase($dbname);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Call the function to update the IDs of other users
        updateIDsAfterDelete($conn, 'users', $id);

        header("Location: dashboard_users.php"); // Redirect to the dashboard after successful deletion
        exit;
    }
?>