<?php
// Database connection script
$host = "localhost";
$user = "root"; // Default username for MySQL
$password = ""; // Default password for MySQL
$dbname = "college_db"; // Database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!-- CREATE DATABASE college_db;

USE college_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);-->
 