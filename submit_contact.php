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
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Save to database
    $stmt = $conn->prepare("INSERT INTO contacts_table (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo '
        <div style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center;">
            <h1 style="font-size: 40px; font-weight: bold;">Your message has been sent successfully!</h1>
        </div>';
    } else {
        echo "Error submitting message.";
    }

    // Send email notification (optional)
        //$to = "iimtcollege@gmail.com";  // Change to your admin email
        /*$headers = "From: " . $email . "\r\n";
        mail($to, "New Contact Form Submission: $subject", $message, $headers);
    } else {
        echo "Error submitting message.";
    }*/

    $stmt->close();
    $conn->close();
}
?>
