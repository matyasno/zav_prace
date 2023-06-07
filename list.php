<?php
include_once "connect.php";

// Query the database to retrieve all registered users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check if any users are found
if (mysqli_num_rows($result) > 0) {
    echo "<div class='listofusers'>";
    echo "<h2 >Registered Users</h2>";
    // Loop through the user data and display it
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>{$row['username']}</p>";
    }
    echo "</div>";
} else {
    echo "No registered users found.";
}

// Close the database connection
mysqli_close($conn);
?>
