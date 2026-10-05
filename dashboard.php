<?php
session_start();
include 'db.php';

if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];

// ✅ Fetch student data from database
$stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $photo = $row['photograph'];
    $parents_name = $row['parents_name'];
    $enrollment = $row['enrollment_number'];
    $course = $row['course'];
    $batch = $row['batch'];
    $age = $row['age'];
    $gender = $row['gender'];
} else {
    $name = "Unknown Student";
    $photo = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background: #003366;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 40px;
            text-align: center;
        }
        .card img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 4px solid #2575fc;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .card h2 {
            margin: 10px 0;
            color: #003366;
        }
        .info-item {
            margin: 8px 0;
            font-size: 1.05em;
            color: #444;
        }
        .info-item span {
            font-weight: bold;
            color: #003366;
        }
        .nav-links {
            margin-top: 30px;
        }
        .nav-links a {
            display: inline-block;
            margin: 6px 10px;
            text-decoration: none;
            background-color: #2575fc;
            color: white;
            padding: 10px 16px;
            border-radius: 8px;
            transition: 0.3s;
        }
        .nav-links a:hover {
            background-color: #1a5edc;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php if (!empty($photo)) { ?>
            <img src="<?php echo $photo; ?>" alt="Student Photo">
        <?php } else { ?>
            <p>No profile picture uploaded.</p>
        <?php } ?>

        <h2><?php echo htmlspecialchars($name); ?></h2>

        <div class="info-item"><span>Enrollment No:</span> <?php echo htmlspecialchars($enrollment); ?></div>
        <div class="info-item"><span>Course:</span> <?php echo htmlspecialchars($course); ?></div>
        <div class="info-item"><span>Batch:</span> <?php echo htmlspecialchars($batch); ?></div>
        <div class="info-item"><span>Age:</span> <?php echo htmlspecialchars($age); ?></div>
        <div class="info-item"><span>Gender:</span> <?php echo htmlspecialchars($gender); ?></div>
        <div class="info-item"><span>Parent's Name:</span> <?php echo htmlspecialchars($parents_name); ?></div>

        <div class="nav-links">
            <a href="syllabus.php">Syllabus</a>
            <a href="timetable.php">Timetable</a>
            <a href="notice_student.php">Notices</a>
            <a href="assignments.php">Assignments</a>
            <a href="exam_results.php">Exam Results</a>
            <a href="queries.php">Queries</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
