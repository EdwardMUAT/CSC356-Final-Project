<?php
// Start the session if needed for this page
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQuest - More Information</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        /* General Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        /* Header Styling */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header .logo img {
            width: 150px;
        }

        /* Navigation Menu */
        nav {
            background-color: #4CAF50;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 15px;
            display: inline-block;
            transition: all 0.3s ease-in-out;
        }
        nav ul li a:hover {
            background-color: #45a049;
            border-radius: 5px;
            transform: scale(1.1);
        }

        /* Main Content Layout */
        .main-content {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }
        .left-panel, .right-panel {
            width: 20%;
            background-color: #ddd;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin: 10px;
        }
        .middle-panel {
            width: 55%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin: 10px;
        }

        /* Content Box Styling */
        .content-box {
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: left;
        }
        .content-box h3 {
            color: #4CAF50;
        }
        .content-box ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        .content-box button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        .content-box button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        /* Quote Section */
        .quote-section {
            margin: 30px 0;
            padding: 20px;
            background-color: #d4f7dc;
            border-radius: 8px;
            font-style: italic;
            color: #2a7b3d;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Impact Stats Section */
        .impact-stats {
            margin: 30px 0;
            padding: 20px;
            background-color: #fef3d4;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .impact-stats h3 {
            color: #f4a000;
        }
        .impact-stats p {
            font-size: 1.2em;
            font-weight: bold;
            margin: 5px 0;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        footer .footer-logo {
            font-size: 24px;
            font-weight: bold;
        }
        footer address {
            margin-top: 10px;
        }
        footer .footer-columns {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
            flex-wrap: wrap;
        }
        footer .footer-columns div {
            width: 30%;
            margin-bottom: 10px;
        }
        footer .footer-columns ul {
            list-style: none;
            padding: 0;
        }
        footer .footer-columns ul li {
            margin-bottom: 5px;
        }
        footer .footer-columns ul li a {
            color: white;
            text-decoration: none;
        }
        footer .footer-columns ul li a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .left-panel, .right-panel, .middle-panel {
                width: 100%;
                margin: 10px 0;
            }
            nav ul {
                flex-wrap: wrap;
            }
            nav ul li {
                margin: 5px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="newpage.php">More Information</a></li>
                <li><a href="donation.php">Donate</a></li>
                <li><a href="resources.php">Resources</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-content">
        <div class="left-panel">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">About EcoQuest</a></li>
                <li><a href="#">Our Mission</a></li>
                <li><a href="#">How It Works</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="middle-panel">
            <h2>More Information About EcoQuest</h2>
            <div class="content-box">
                <p>
                    EcoQuest is a platform that encourages sustainable living through fun and engaging challenges.
                    Participants can track their progress, earn rewards, and learn valuable tips for an eco-friendly lifestyle.
                </p>
            </div>

            <div class="quote-section">
                "The Earth is what we all have in common." – Wendell Berry
            </div>

            <div class="content-box">
                <h3>Why Choose EcoQuest?</h3>
                <ul>
                    <li>Interactive challenges tailored to your lifestyle</li>
                    <li>Engaging rewards system to motivate participation</li>
                    <li>Access to a community of like-minded individuals</li>
                    <li>Comprehensive knowledge base on sustainability</li>
                </ul>
            </div>

            <div class="impact-stats">
                <h3>Our Impact</h3>
                <p><strong>5,000+</strong> Trees Planted</p>
                <p><strong>10,000+</strong> Liters of Clean Water Provided</p>
                <p><strong>3,000+</strong> Wildlife Shelters Funded</p>
            </div>
        </div>

        <div class="right-panel">
            <h3>Resources</h3>
            <ul>
                <li><a href="#">How to Start Composting</a></li>
                <li><a href="#">Reducing Your Carbon Footprint</a></li>
                <li><a href="#">Top Energy-Saving Tips</a></li>
                <li><a href="#">Guide to Recycling</a></li>
            </ul>
        </div>
    </div>

    <footer>
        <div class="footer-logo">EcoQuest</div>
        <address>
            Address: 123 Main Street, City<br>
            State Province, Country
        </address>
        <div class="footer-columns">
            <div>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Support Us</a></li>
                    <li><a href="#">Volunteer</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            $('#show-more').click(function() {
                $('#details').slideToggle();
            });
        });
    </script>
</body>
</html>