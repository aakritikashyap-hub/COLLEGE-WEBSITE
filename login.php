<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - College Portal</title>
    <link rel="stylesheet" href="_style8.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
            <div class="links">
                <a href="forgot-password.html">Forgot <span>Password?</span></a>
                <br>
                <a href="signup.html">Don't have an account? <span>Sign up</span></a>
            </div>
        </form>
    </div>
</body>
</html>-->

<?php  
session_start();
include 'db.php';

$error_message = ""; // Initialize error message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM students WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['student_id'] = $row['id'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error_message = "❌ Invalid Credentials! Password does not match.";
        }
    } else {
        $error_message = "❌ Email not found!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="_style8.css">
</head>
<body>
<div class="login-container">
        <form method="POST" action="">
            <h2>Student Login</h2>

            <!-- ✅ Error message at the top of the box -->
            <?php if (!empty($error_message)): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div class="forgot_password">
                <a href="forgot_password.html">Forgot Password?</a>
            </div>
        </form>
    </div>
</body>
</html>