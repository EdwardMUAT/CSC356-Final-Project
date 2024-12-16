<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainability Resources</title>
    <style>
        body, html {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #4CAF50;
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
            display: block;
        }

        nav ul li a:hover {
            background-color: #45a049;
            border-radius: 5px;
        }

        .content-container {
            text-align: center;
            background: white;
            padding: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
        }

        h1, h2 {
            color: #4CAF50;
        }

        p {
            color: #555;
        }

        #video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .video {
            width: 100%;
            max-width: 400px;
            aspect-ratio: 16 / 9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        .fact-section, .tips-section {
            margin-top: 30px;
            background-color: #fef3d4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .fact-section h3, .tips-section h3 {
            color: #f4a000;
        }

        ul {
            text-align: left;
            margin: 10px 20px;
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="more_info.php">More Information</a></li>
            <li><a href="donation.php">Donate</a></li>
            <li><a href="resources.php">Resources</a></li>
        </ul>
    </nav>
    <div class="content-container">
        <h1>Sustainability Resources</h1>
        <p>Discover helpful videos, facts, and tips to support your sustainability journey.</p>

        <h2>Trees and Plants</h2>
        <p id="treeInfo">Featured Tree: The Oak Tree – Symbol of strength and endurance.</p>
        <p id="plantInfo">Featured Plant: Bamboo – A fast-growing, renewable resource for sustainable living.</p>
        <img id="plantImage" src="tree_image.jpg" alt="A beautiful tree" style="width:100%; max-width:300px; height:auto; margin: 20px 0;">

        <h2>Featured Videos</h2>
        <div id="video-container">
            <!-- YouTube Video 1 -->
            <div class="video">
                <iframe 
                    width="100%" 
                    height="100%" 
                    src="https://youtu.be/QfQ3WjLZFm4" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>

            <!-- YouTube Video 2 -->
            <div class="video">
                <iframe 
                    width="100%" 
                    height="100%" 
                    src="https://youtu.be/QfQ3WjLZFm4" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- Sustainability Facts -->
        <div class="fact-section">
            <h3>Did You Know?</h3>
            <ul>
                <li>One mature tree can absorb up to 48 pounds of carbon dioxide annually.</li>
                <li>Recycling just one aluminum can save enough energy to power a TV for three hours.</li>
                <li>Plastic takes approximately 500 years to decompose in a landfill.</li>
                <li>Bamboo grows 30 times faster than trees, making it a highly sustainable resource.</li>
            </ul>
        </div>

        <!-- Practical Sustainability Tips -->
        <div class="tips-section">
            <h3>Practical Tips for Sustainable Living</h3>
            <ul>
                <li>Switch to reusable bags, water bottles, and straws to reduce plastic waste.</li>
                <li>Conserve energy by turning off lights and unplugging devices when not in use.</li>
                <li>Start composting kitchen waste to enrich your soil and reduce landfill waste.</li>
                <li>Plant native trees and shrubs to support local wildlife and improve air quality.</li>
            </ul>
        </div>
    </div>
    <footer>
        <p>© 2023 EcoQuest. All rights reserved.</p>
    </footer>
</body>
</html>