<?php
session_start();
include_once "connect.php";

// Retrieve the form data
$firstName = $_POST['first'];
$lastName = $_POST['last'];
$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the username is already taken
$checkSql = "SELECT * FROM users WHERE username='$username'";
$checkResult = mysqli_query($conn, $checkSql);

if (mysqli_num_rows($checkResult) > 0) {
    $_SESSION['errorMsg'] = "Username is already taken.";
    header("Location: loginpage.php");
    exit();
} else {
    // Insert the user data into the database
    $insertSql = "INSERT INTO users (firstname, lastname, username, email, password) 
                  VALUES ('$firstName', '$lastName', '$username', '$email', '$password')";

    if (mysqli_query($conn, $insertSql)) {
        $_SESSION['successMsg'] = "Registration successful!";
        header("Location: loginpage.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
