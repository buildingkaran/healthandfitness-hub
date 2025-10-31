<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data
$sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<h2 style='text-align:center; margin-top:50px;'>Thank you! Your message has been sent successfully.</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>