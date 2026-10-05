<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $stmt = $conn->prepare("INSERT INTO queries (student_email, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $message);
    
    if ($stmt->execute()) {
        $success = "✅ Query submitted successfully!";
    } else {
        $error = "❌ Error submitting query.";
    }
}

// Fetch existing queries and answers for the entered email (optional: store this in session after login)
$allQueries = [];
if (!empty($_POST['email'])) {
    $emailToFetch = $_POST['email'];
    $queryStmt = $conn->prepare("SELECT message, answer FROM queries WHERE student_email = ?");
    $queryStmt->bind_param("s", $emailToFetch);
    $queryStmt->execute();
    $result = $queryStmt->get_result();
    $allQueries = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Query</title>
    <style>
        body { 
    font-family: Arial;
    background: rgb(68, 106, 147);
    padding: 30px;
    margin: 0;
}

.container {
    background: white;
    padding: 30px 40px; /* More horizontal padding for better layout */
    border-radius: 10px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: auto;
    box-sizing: border-box;
}

input, textarea {
    display: block;
    width: 100%;
    padding: 12px;
    margin-top: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    margin-top: 15px;
    background-color: #003366;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    /*width: 100%;*/
}

.message {
    margin-top: 10px;
    color: green;
}

.query-box {
    background-color: #f1f1f1;
    padding: 15px;
    border-radius: 10px;
    margin-top: 25px;
    box-sizing: border-box;
}

.query-box strong {
    display: block;
    margin-bottom: 6px;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>❓ Submit a Query</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="6" placeholder="Enter your query here..." required></textarea>
            <button type="submit">Submit</button>
        </form>

        <?php if (!empty($success)) echo "<p class='message'>$success</p>"; ?>
        <?php if (!empty($error)) echo "<p class='message' style='color:red;'>$error</p>"; ?>

        <?php if (!empty($allQueries)) { ?>
            <h3 style="margin-top: 40px;">📬 Your Previous Queries</h3>
            <?php foreach ($allQueries as $q) { ?>
                <div class="query-box">
                    <strong>Your Query:</strong> <?php echo $q['message']; ?><br>
                    <strong>Answer:</strong> <?php echo $q['answer'] ? $q['answer'] : 'No answer yet.'; ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</body>
</html>
