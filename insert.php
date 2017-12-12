<?php
$servername = "localhost";
$username = "citragad_admin";
$password = "masih diseting";
$dbname = "citragad_subscribe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = $_POST['email'];

$sql = "INSERT INTO subscribe (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location:index.php')
?>