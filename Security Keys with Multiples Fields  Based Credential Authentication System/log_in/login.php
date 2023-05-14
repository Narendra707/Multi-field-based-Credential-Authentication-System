



<?php

// Get user data from the form
$name=$_POST['name'];
$password=$_POST['password'];
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
$sql = "select * from users where  username ='$name' and password='$password' and Keyone='$Keyone' and Keytwo='$Keytwo' and Keythird='$Keythird'" ;


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User credentials are valid, redirect to the homepage or another page
    
    echo " Great !  $name You logged in Successfully !";
    echo "<a href='logout.php'>Logout</a>";
    exit();
} else {
    // User credentials are invalid, display an error message
    echo "Please enter valid Credential and Keys ";

}

// Close the database connection
$conn->close();

?>
