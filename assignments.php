<!DOCTYPE html>
<html>
<head>
    <title>Assignments</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background:rgb(68, 106, 147);
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            font-size: 34px;
            color: white;
            margin-bottom: 25px;
        }

        .assignment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .assignment-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .assignment-card:hover {
            transform: translateY(-5px);
        }

        .assignment-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #0056b3;
            text-align: center;
        }

        .assignment-card img {
            width: 100%;
            max-height: 180px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .lightbox img {
            max-width: 100%;
            max-height: 95vh;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.4);
        }

        .lightbox:target {
            display: flex;
        }

        /* Optional: Close on click */
        .lightbox a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

    <h1>📄 Assignments</h1>

    <div class="assignment-grid">
        <!-- Assignment 1 -->
        <div class="assignment-card">
            <div class="assignment-title">Digital Marketing - Assignment</div>
            <a href="#img1">
                <img src="images/DM_assignment.jpg" alt="Digital Marketing Assignment">
            </a>
        </div>

        <!-- Assignment 2 -->
        <div class="assignment-card">
            <div class="assignment-title">Java Programming - Assignment</div>
            <a href="#img2">
                <img src="images/java_assignment.jpg" alt="Java Programming Assignment">
            </a>
        </div>

        <!-- Assignment 3 -->
        <div class="assignment-card">
            <div class="assignment-title">Software Engineering - Assignment</div>
            <a href="#img3">
                <img src="images/SE_assignment.jpg" alt="Software Engineering Assignment">
            </a>
        </div>

        <!-- Assignment 4 -->
        <div class="assignment-card">
            <div class="assignment-title">Introduction to Artificial Intelligence - Assignment</div>
            <a href="#img4">
                <img src="images/AI_assignment.jpg" alt="Introduction to Artificial Intelligence Assignment">
            </a>
        </div>

        <!-- Assignment 5 -->
        <div class="assignment-card">
            <div class="assignment-title">Personality Development Skills - Assignment</div>
            <a href="#img5">
                <img src="images/PDS_assignment.jpg" alt="Personality Development Skills Assignment">
            </a>
        </div>

        <!-- Assignment 6 -->
        <div class="assignment-card">
            <div class="assignment-title">Introduction to Management & Entrepreneurship Development - Assignment</div>
            <a href="#img6">
                <img src="images/ED_assignment.jpg" alt="Introduction to Management & Entrepreneurship Development Assignment">
            </a>
        </div>
    </div>

    <!-- Lightbox Views -->
    <div id="img1" class="lightbox">
        <a href="#"><img src="images/DM_assignment.jpg" alt="Full View Assignment 1"></a>
    </div>

    <div id="img2" class="lightbox">
        <a href="#"><img src="images/java_assignment.jpg" alt="Full View Assignment 2"></a>
    </div>

    <div id="img3" class="lightbox">
        <a href="#"><img src="images/SE_assignment.jpg" alt="Full View Assignment 1"></a>
    </div>

    <div id="img4" class="lightbox">
        <a href="#"><img src="images/AI_assignment.jpg" alt="Full View Assignment 1"></a>
    </div>

    <div id="img5" class="lightbox">
        <a href="#"><img src="images/PDS_assignment.jpg" alt="Full View Assignment 1"></a>
    </div>

    <div id="img6" class="lightbox">
        <a href="#"><img src="images/ED_assignment.jpg" alt="Full View Assignment 1"></a>
    </div>

</body>
</html>
