<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "usercred";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Perform database query to authenticate user
$sql = "SELECT * FROM user_log WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Authentication successful
    header ("Location: https://www.google.com");
} else {
    // Authentication failed
    echo "Login failed!";
}

// Close the database connection
$conn->close();
?>
