<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQuest Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        /* General Layout */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Header and Hero Section */
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
        }

        header .logo img {
            width: 150px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 15px;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        nav ul li a:hover {
            background-color: #45a049;
            border-radius: 5px;
            transform: scale(1.1);
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('eco_hero.jpg') center/cover;
            color: white;
            padding: 50px 20px;
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
        }

        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        /* Main Content Layout */
        .main-content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            flex: 1;
        }

        .left-panel, .right-panel {
            width: 20%;
            background-color: #e9f7e9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .middle-panel {
            width: 55%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content-box {
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content-box h3 {
            color: #4CAF50;
        }

        .content-box input, .content-box button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .content-box button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .content-box ul {
            list-style-type: disc;
            margin: 10px 20px;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }

        footer .footer-logo {
            font-size: 20px;
            font-weight: bold;
        }

        footer address {
            margin-top: 10px;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }

            .left-panel, .right-panel, .middle-panel {
                width: 100%;
                margin-bottom: 20px;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 10px 0;
            }

            .hero h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="eco_logo.png" alt="EcoQuest Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="more_info.php">More Information</a></li>
                <li><a href="donation.php">Donate</a></li>
                <li><a href="resources.php">Resources</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to EcoQuest</h1>
        <p>Take the first step towards a greener future with us!</p>
    </section>

    <div class="main-content">
        <!-- Left Panel -->
        <div class="left-panel">
            <h3>Environmental Tips</h3>
            <ul>
                <li>Use reusable bags</li>
                <li>Reduce water waste</li>
                <li>Recycle and reuse</li>
                <li>Save electricity</li>
            </ul>
        </div>

        <!-- Middle Panel -->
        <div class="middle-panel">
            <div class="content-box">
                <h3>Join the EcoQuest Challenge</h3>
                <form id="signup-form">
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                    <button type="submit" id="signup-button">Sign Up</button>
                </form>
            </div>
            <div class="content-box">
                <h3>Learn More</h3>
                <button type="button" name="load_more">Discover More</button>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-panel">
            <h3>Why Go Green?</h3>
            <ul>
                <li>Improve health standards</li>
                <li>Reduce pollution</li>
                <li>Save natural resources</li>
                <li>Increase sustainability</li>
            </ul>
        </div>
    </div>

    <footer>
        <div class="footer-logo">EcoQuest</div>
        <address>123 Main Street, City<br>State Province, Country</address>
    </footer>

    <script>
        // Redirect to "More Information" page after sign up
        document.getElementById('signup-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            alert('Thank you for signing up! Redirecting you to learn more...');
            window.location.href = 'more_info.php'; // Redirect to More Information page
        });

        // Example alert for Discover More button
        $('button[name="load_more"]').click(function() {
            alert('Thank you for your interest in EcoQuest!');
        });
    </script>
</body>
</html>