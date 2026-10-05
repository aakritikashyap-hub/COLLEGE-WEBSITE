<?php
include 'db.php'; // Connect to the database

// Student Data
$id = "006";
$name = "Prateek Verma";
$email = "prateekverma013@gmail.com";
$plain_password = "prateekverma013"; // Change this for each student
$hashed_password = password_hash($plain_password, PASSWORD_DEFAULT); // Hash the password
$parents_name = "Mr. Ajay Verma";
$enrollment_number = "01313402023";
$course = "Bachelor of Computer Application";
$batch = "2023 - 2026";
$age = "19";

// Insert Query
$query = "INSERT INTO students (id, name, email, password, parents_name, enrollment_number, course, batch, age) 
          VALUES ('$id', '$name', '$email', '$hashed_password','$parents_name', '$enrollment_number', '$course', '$batch', '$age')";

if ($conn->query($query)) {
    echo "✅ Student added successfully!";
} else {
    echo "❌ Error: " . $conn->error;
}
?>
