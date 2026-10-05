<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background: linear-gradient(to right, #003366, #0055A4);
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header img {
            height: 50px;
            margin-right: 15px;
        }
        .nav {
            display: flex;
            justify-content: center;
            background: #0055A4;
            padding: 10px 0;
        }
        .nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
        }
        .nav a:hover {
            background: #003366;
            border-radius: 5px;
        }
        .hero {
            background-image: url("https://www.edustoke.com/assets/uploads-new/90ab5c83-2657-465d-b411-b49cd98156bc.jpg");
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 33px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            text-align: center;
            position: relative;
        }
        .explore-btn {
            background-color: #ff4c4c;
            color: white;
            padding: 15px 30px;
            font-size: 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .explore-btn:hover {
            background-color: #d63031;
        }
        .scroll-section {
            padding: 40px;
            text-align: center;
            background: white;
        }
        .scroll-section h2 {
            color: #003366;
        }
        .card {
            display: inline-block;
            width: 250px;
            margin: 20px;
            padding: 20px;
            background: #fff;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-radius: 10px;
        }
        .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }
        .footer-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background: #002147;
            color: white;
        }
        .footer-section {
            width: 30%;
        }
        .footer-section h3 {
            border-bottom: 2px solid #ff4c4c;
            display: inline-block;
            padding-bottom: 5px;
        }
        .social-icons {
            margin-top: 10px;
            text-align: center;
        }
        .social-icons a img {
            width: 30px;
            margin: 0 10px;
        }
        .footer {
            background: #002147;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
        .social-icons {
            margin-top: 10px;
            text-align: center;
        }
        .social-icons a img {
            width: 30px;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://t3.ftcdn.net/jpg/04/91/76/62/360_F_491766294_h4j7LbW2YgfbNHhq7F8GboIc1XyBSEY5.jpg" alt="College Logo">
        Ideal Institute of Management and Technology
    </div>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="about.html">About Us</a>
        <a href="academics.html">Academics</a>
        <a href="facilities.html">Facilities</a>
        <a href="infrastructure.html">Infrastructure</a>
        <a href="fees.html">Fee Structure</a>
        <a href="faculty.html">Faculty</a>
        <a href="notices.html">Notices</a>
        <a href="societies.html">Societies/Clubs</a>
        <a href="feedback.html">Feedback</a>
        <a href="contact.html">Contact</a>
        <a href="login.php">Login</a>
    </div>
    <div class="hero">
        Empowering Students for the Future
        <a href="explore.html"><button class="explore-btn">Explore Now</button></a>
    </div>
    <div class="scroll-section">
        <h2>Latest Updates & Events</h2>
        <!--<div class="card">Admissions Open 2025-26</div>-->
        <div class="card">Annual Sports Meet 2025</div>
        <div class="card">New Research Lab Inauguration</div>
        <div class="card">Cultural Fest 2025</div>
    </div>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Location</h3>
            <p>Karkardooma, New Delhi – 110 093</p>
            <p>📞 +91 9987340959</p>
            <p>✉ iimtcollege@gmail.com</p>
        </div>
        <div class="footer-section">
            <h3>Our Tags</h3>
            <p>▶ Class Room</p>
            <p>▶ Co-Curricular Activities</p>
            <p>▶ Library</p>
        </div>
        <div class="footer-section">
            <h3>Latest News</h3>
            <p>🔹 New Research Collaboration</p>
            <p>🔹 Annual Tech Fest Announced</p>
            <p>🔹 Guest Lecture by Industry Experts</p>
        </div>
    </div>
    <div class="social-icons">
        <a href="https://www.facebook.com/share/1A7pxGavrU/?mibextid=wwXIfr"><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Facebook_svg-256.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/idealinstitute.official?igsh=MXc3MnA5NTFnamlucw=="><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Instagram_svg-256.png" alt="Instagram"></a>
        <a href="https://youtube.com/@idealinstitutekarkardooma7423?si=TtwkY5o7swnvg0SE"><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Youtube3_svg-256.png" alt="Youtube"></a>
    </div>
    <div class="footer">&copy; 2025 Ideal Institute of Management and Technology. All Rights Reserved.</div>
</body>
</html>
