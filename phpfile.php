<?php
// Database configuration (replace with your database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gather form data
$name = $_POST['name'];
$height = $_POST['height'];
$disease = $_POST['disease'];
$age = $_POST['age'];
$temperature = $_POST['temperature'];
$weight = $_POST['weight'];

// Insert data into the database
$sql = "INSERT INTO health_data (name, height, disease, age, temperature, weight)
        VALUES ('$name', $height, '$disease', $age, $temperature, $weight)";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
