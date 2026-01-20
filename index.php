<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeKUT Homepage Replica</title>
    <link rel="stylesheet" href="dekut.css">
    <style>
        /* Inline style for table (from your running total example) */
        table, td, th {
            border: 1px solid black;
            padding: 8px;
        }
        table { border-collapse: collapse; }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
        input[type="number"]:focus {
            border: 1.5px solid blue;
            outline: none;
        }
    </style>
</head>
<body>

    <!-- --- Site Header --- -->
    <header class="site-header">
        <div class="top-bar">
            <div class="container">
                <nav class="top-bar-left" aria-label="Utility Links">
                    <ul>
                        <li><a href="#">NAIROBI CAMPUS</a></li>
                        <li><a href="#">DEKUT CENTRES</a></li>
                        <li><a href="#">SCIENCE PARK</a></li>
                        <li><a href="#">LIBRARY</a></li>
                        <li><a href="#">MEDIA CENTRE</a></li>
                        <li><a href="#">COVID-19</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </nav>
                <nav class="top-bar-right" aria-label="Portal Links">
                    <ul>
                        <li><a href="#">Staff Portal</a></li>
                        <li><a href="#">Student Portal</a></li>
                        <li><a href="#" class="search-icon" aria-label="Search">🔍</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="main-nav">
            <div class="container">
                <a href="#" class="logo-container">
                    <div class="logo-image"></div>
                    <div class="logo-text">
                        <span class="logo-title">Dedan Kimathi University of Technology</span>
                        <span class="logo-motto">Better Life Through Technology</span>
                    </div>
                </a>

                <nav class="main-menu" aria-label="Main Navigation">
                    <ul>
                        <li><a href="#" class="active">HOME</a></li>
                        <li><a href="#">ABOUT DEKUT <span class="dropdown-arrow">▾</span></a></li>
                        <li><a href="#">ACADEMICS <span class="dropdown-arrow">▾</span></a></li>
                        <li><a href="#">RESEARCH <span class="dropdown-arrow">▾</span></a></li>
                        <li><a href="#">STUDENTS <span class="dropdown-arrow">▾</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="content">
        <div class="info-section">
            <div class="container column-layout">
                <div class="info-block">
                    <h3>OUR SCHOOL:</h3>
                    <p>Our School has two departments namely: Computer Science and Information Technology.</p>
                </div>

                <hr class="info-divider">

                <div class="info-block">
                    <h3>OUR STUDENTS:</h3>
                    <p>Our School is able to attract the best students due to its programs' competitiveness in the industry.</p>
                </div>
            </div>
        </div>

        <main class="page-content container">
            <div class="main-content-area">
                <h2>Welcome to the Main Content</h2>
                <p>This is the primary content area. You can put articles, welcome messages, and other key information here. It is designed to be flexible and take up the majority of the space on the page.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <!-- Running Total Form -->
                <form action="" method="post">
                    <fieldset>
                        <legend>Running Total of all TextBoxes</legend>
                        <table border="1">
                            <tr>
                                <th>No.</th>
                                <th>Item</th>
                                <th>Price</th>
                            </tr> 
                            <tr>
                                <td>1</td>
                                <td>Milk:</td>
                                <td><input type="number" id="price1" name="price1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bread:</td>
                                <td><input type="number" id="price2" name="price2"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Noodles:</td>
                                <td><input type="number" id="price3" name="price3"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Cheese:</td>
                                <td><input type="number" id="price4" name="price4"></td>
                            </tr>
                            <tr>
                                <th colspan="2">Total price</th>
                                <td id="total">0</td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>

            <aside class="sidebar">
                <h3>Quick Links</h3>
                <ul class="sidebar-links">
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">Programmes</a></li>
                    <li><a href="#">E-Learning Portal</a></li>
                    <li><a href="#">News & Events</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </aside>
        </main>
    </div>

    <script>
        // Running total logic using JS
        const inputs = document.querySelectorAll("input[type='number']");
        inputs.forEach(input => {
            input.addEventListener("input", calculateTotal);
        });

        function calculateTotal() {
            let total = 0;
            inputs.forEach(input => {
                total += Number(input.value) || 0;
            });
            document.getElementById("total").textContent = total;
        }
    </script>

</body>
</html>

