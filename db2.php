<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password for localhost
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $author = $_POST['author'];
    $publication = $_POST['publication'];
    $year = $_POST['year'];

    // Insert data into the database
    $sql = "INSERT INTO book (name, author, publication, year) VALUES ('$name', '$author', '$publication', '$year')";
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();