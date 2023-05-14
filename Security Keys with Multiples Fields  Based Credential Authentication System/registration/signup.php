

<?php

// Get user data from the form
$name=$_POST['name'];
$password=$_POST['password'];
$realname=$_POST['realname'];
$Keyone = $_POST['Keyone'];
$Keytwo = $_POST['Keytwo'];
$Keythird = $_POST['Keythird'];

// Create a connection to the MySQL database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "gpas_final";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare a SQL statement to insert the user data into the database
$sql = "INSERT INTO users (username, password, fname,Keyone , Keytwo, Keythird) VALUES ('$name', '$password', '$realname','$Keyone','$Keytwo','$Keythird')";

// Execute the SQL statement and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<a href='../log_in/login.html'>Log-in</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
