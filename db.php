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
    $class = $_POST['class'];

    // Upload photos and videos to a folder and get their file paths
    $photos_path = "path/to/uploaded/photos/" . $_FILES["photos"]["name"];
    $videos_path = "path/to/uploaded/videos/" . $_FILES["videos"]["name"];

    // Create directories if they don't exist
    if (!is_dir("path/to/uploaded/photos/")) {
        mkdir("path/to/uploaded/photos/", 0755, true);
    }

    if (!is_dir("path/to/uploaded/videos/")) {
        mkdir("path/to/uploaded/videos/", 0755, true);
    }

    move_uploaded_file($_FILES["photos"]["tmp_name"], $photos_path);
    move_uploaded_file($_FILES["videos"]["tmp_name"], $videos_path);

    // Insert data into the database
    $sql = "INSERT INTO student_table (name, class, photos, videos) VALUES ('$name', '$class', '$photos_path', '$videos_path')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();