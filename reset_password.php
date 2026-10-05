<?php
include 'db.php'; // Connect to the database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];

    // Check if email exists
    $query = "SELECT * FROM students WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update password in database
        $update_query = "UPDATE students SET password = '$hashed_password' WHERE email = '$email'";
        
        if ($conn->query($update_query)) {
            echo "<script>alert('✅ Password updated successfully!'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('❌ Error updating password. Try again!'); window.location.href = 'forgot-password.html';</script>";
        }
    } else {
        echo "<script>alert('❌ Email not found!'); window.location.href = 'forgot-password.html';</script>";
    }
}
?>
