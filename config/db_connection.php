<?php
    function connectToDatabase($dbname) {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }

    function checkAndCreateTable($conn, $tablename) {
        // Check if the table exists, and create it if not
        $tableCheckQuery = "SHOW TABLES LIKE '$tablename'";
        $tableCheckResult = mysqli_query($conn, $tableCheckQuery);

        if (mysqli_num_rows($tableCheckResult) == 0) {
            $createTableQuery = "CREATE TABLE $tablename (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL
            )";

            if (mysqli_query($conn, $createTableQuery)) {
                echo "Table '$tablename' created successfully.";
            } else {
                echo "Error creating table: " . mysqli_error($conn);
            }
        }
    }

    function updateIDsAfterDelete($conn, $tablename, $deletedID) {
        // Delete the user from the database
        $deleteSql = "DELETE FROM $tablename WHERE id = $deletedID";

        if (mysqli_query($conn, $deleteSql)) {
            // Update the IDs of other users in the database
            $updateSql = "UPDATE $tablename SET id = id - 1 WHERE id > $deletedID";
            mysqli_query($conn, $updateSql);
        } else {
            echo "Error deleting user: " . mysqli_error($conn);
        }

        // Check if there are any users left in the database
        $checkSql = "SELECT COUNT(*) as count FROM $tablename";
        $result = mysqli_query($conn, $checkSql);
        $row = mysqli_fetch_assoc($result);
        $totalCount = $row['count'];
    
        // If there are no users left, reset the ID to 1
        if ($totalCount === "0") {
            $resetSql = "ALTER TABLE $tablename AUTO_INCREMENT = 1";
            mysqli_query($conn, $resetSql);
        }
    }
?>
