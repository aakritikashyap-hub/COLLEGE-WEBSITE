<?php
include 'db.php';

// Fetch all users from the students table
$result = $conn->query("SELECT id, password FROM students");

while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $plain_password = $row['password'];

    // Check if the password is already hashed (hashed passwords are at least 60 characters)
    if (strlen($plain_password) < 60) {
        // Hash the password
        $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

        // Debugging output
        echo "Updating ID: $id | Old Password: $plain_password | New Hashed Password: $hashed_password <br>";

        // Update the password in the database
        $update_query = "UPDATE students SET password = '$hashed_password' WHERE id = $id";
        if ($conn->query($update_query)) {
            echo "✅ Password updated for user ID: $id<br>";
        } else {
            echo "❌ Error updating user ID: $id - " . $conn->error . "<br>";
        }
    } else {
        echo "User ID: $id already has a hashed password. Skipping...<br>";
    }
}

echo "<br>✅ Passwords successfully updated!";
?>
