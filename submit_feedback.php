<?php 
// Database credentials
$host = "localhost"; // Change if necessary
$dbname = "college_db";
$username = "root";  // Change if necessary
$password = "";  // Change if necessary

// Establish database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $course = trim($_POST["course"]);
    $quality = $_POST["quality"] ?? '';
    $feedback = trim($_POST["feedback"]);
    $improvements = trim($_POST["improvements"]);
    $newsletter = isset($_POST["newsletter"]) ? "Yes" : "No";

    if (empty($name) || empty($email) || empty($course) || empty($quality)) {
        die("All required fields must be filled!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Save to database
    $stmt = $conn->prepare("INSERT INTO feedback_table (name, email, course, quality, feedback, improvements, newsletter) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $course, $quality, $feedback, $improvements, $newsletter);

    if ($stmt->execute()) {
        echo '
        <div style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center;">
            <h1 style="font-size: 40px; font-weight: bold;">Your message has been sent successfully!</h1>
        </div>';
    } else {
        echo "Error submitting feedback.";
    }

    // Send confirmation email (optional)
        /*$to = $email;
        $subject = "Feedback Received - College Course";
        $message = "Dear $name,\n\nThank you for your feedback on the $course course.\n\nWe appreciate your time!\n\nBest regards,\nCollege Team";
        $headers = "From: iimtcollege@gmail.com";
        mail($to, $subject, $message, $headers);
    } else {
        echo "Error submitting feedback.";
    }*/

    $stmt->close();
    $conn->close();
}
?>
