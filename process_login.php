<?php
$servername = "localhost";  // XAMPP default is localhost
$username = "root";         // Default XAMPP username
$password = "";             // Default XAMPP password is blank
$dbname = "loginForm";      // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database connected successfully!";

// Get form data
$email = $_POST['email'];
$pass = $_POST['password'];

// Insert data into the "login" table
$sql = "INSERT INTO login (email, password) VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>