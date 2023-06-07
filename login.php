<?php
session_start();
include_once "connect.php";
// Retrieve the form data
$username = $_POST['user'];
$password = $_POST['password'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to check if the user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: mainpage.php");
}
else {
    $_SESSION['errorLoginMsg'] = "Invalid username or password";
    header("Location: loginpage.php");
}

// Close the database connection
mysqli_close($conn);
?>