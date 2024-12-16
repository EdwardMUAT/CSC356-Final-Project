<?php
// Start the session to store user data 
session_start();

// Simulate loading donation options from a JSON file or external source
$jsonDonations = '[
    {"amount": "10", "description": "Helps plant a tree."},
    {"amount": "25", "description": "Helps clean a river."},
    {"amount": "50", "description": "Supports wildlife conservation projects."},
    {"amount": "100", "description": "Funds renewable energy research."}
]';

// Decode JSON to PHP array
$donationOptions = json_decode($jsonDonations, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQuest - Donation Page</title>
    <style>
        /* General Layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
            color: #333;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        header .logo img {
            width: 120px;
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
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        nav ul li a:hover {
            color: #4CAF50;
        }

        .main-content {
            flex: 1;
            padding: 30px 20px;
            text-align: center;
        }

        .main-content h1 {
            color: #4CAF50;
        }

        .donation-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 30px 0;
        }

        .donation-option {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            width: 220px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            position: relative;
        }

        .donation-option:hover {
            transform: translateY(-5px);
        }

        .donation-option h3 {
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .donation-option a {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .donation-option a:hover {
            background-color: #45a049;
        }

        .impact-summary, .quick-facts {
            margin: 30px auto;
            padding: 20px;
            max-width: 800px;
            text-align: left;
            border-radius: 10px;
        }

        .impact-summary {
            background-color: #e9f7e9;
        }

        .impact-summary h2 {
            color: #4CAF50;
        }

        .quick-facts {
            background-color: #fef3d4;
        }

        .quick-facts h3 {
            color: #f4a000;
        }

        .testimonial-slider {
            margin-top: 40px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .testimonial {
            font-style: italic;
            color: #555;
            font-size: 1.2em;
        }

        footer {
            padding: 20px 0;
        }

        footer .footer-logo {
            font-size: 18px;
            font-weight: bold;
        }

        footer address {
            margin-top: 10px;
        }
    </style>
    <script>
        $(document).ready(function() {
            let testimonials = [
                "Your donations have helped restore our local park! – Emma, Community Organizer",
                "Thanks to your support, we've planted over 500 trees this year alone. – Jake, Forestry Manager",
                "Your contributions help us keep our rivers clean and vibrant for future generations. – Mia, Environmental Scientist"
            ];
            let index = 0;

            function displayNextTestimonial() {
                $('#testimonial').fadeOut(400, function() {
                    $(this).text(testimonials[index]).fadeIn(400);
                });
                index = (index + 1) % testimonials.length;
                setTimeout(displayNextTestimonial, 4000);
            }

            displayNextTestimonial();
        });
    </script>
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

    <div class="main-content">
        <h1>Support Our Cause</h1>
        <p>Choose a donation amount that best fits your ability to help us make a difference:</p>

        <!-- Donation Options -->
        <div class="donation-container">
            <?php foreach ($donationOptions as $option): ?>
                <div class="donation-option">
                    <h3>$<?= $option['amount'] ?></h3>
                    <p><?= $option['description'] ?></p>
                    <a href="payment.php?amount=<?= $option['amount'] ?>">Donate $<?= $option['amount'] ?></a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Impact Summary Section -->
        <div class="impact-summary">
            <h2>How Your Donations Help</h2>
            <ul>
                <li>Over 5,000 trees planted in urban areas to combat air pollution.</li>
                <li>Clean water projects benefiting over 10,000 families.</li>
                <li>Support for wildlife sanctuaries protecting endangered species.</li>
                <li>Renewable energy projects reducing reliance on fossil fuels.</li>
            </ul>
        </div>

        <!-- Quick Facts Section -->
        <div class="quick-facts">
            <h3>Did You Know?</h3>
            <ul>
                <li>A single tree can absorb 48 pounds of CO2 each year.</li>
                <li>Recycling one aluminum can saves enough energy to power a TV for 3 hours.</li>
                <li>It takes 500 years for plastic to decompose in a landfill.</li>
                <li>Switching to LED bulbs reduces energy use by up to 80%.</li>
            </ul>
        </div>

        <!-- Testimonial Slider -->
        <div class="testimonial-slider">
            <p id="testimonial" class="testimonial"></p>
        </div>
    </div>

    <footer>
        <div class="footer-logo">EcoQuest</div>
        <address>123 Main Street, City<br>State Province, Country</address>
    </footer>
</body>
</html>