<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeKUT Homepage Replica</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="dekut.css">

    <!-- Inline fallback colors and fixes (in case dekut.css fails) -->
    <style>
        body { background-color: #f4f4f4; font-family: Arial, Helvetica, sans-serif; margin:0; padding:0; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        .container { width: 90%; max-width: 1400px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }

        /* Header */
        .site-header { width: 100%; border-top: 3px solid #000; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 0 2px 6px rgba(10,50,7,0.3),0 6px 15px rgba(10,50,7,0.5); position: fixed; top:0; z-index:1000; }
        .top-bar { background-color: #0f4a0a; color: #f0f0f0; padding: 10px 0; font-size:12px; font-weight:bold; }
        .top-bar-left ul, .top-bar-right ul { display:flex; align-items:center; }
        .top-bar-left li { margin-right: 12px; padding-right:12px; border-right:1px solid #c0c0c0; }
        .top-bar-left li:last-child { border-right:none; }
        .top-bar-right li { margin-left: 20px; }
        .top-bar a:hover { color: #fde100; }

        .main-nav { background-color: #0f4a0a; padding:15px 0; border-top:1px solid #1a5a14; }
        .logo-container { display:flex; align-items:center; }
        .logo-image { width:70px; height:70px; background-color:#fde100; margin-right:15px; display:grid; place-items:center; color:#333; font-size:10px; font-weight:bold; text-align:center; border-radius:50%; }
        .logo-image::before { content:'LOGO'; }
        .logo-text .logo-title { display:block; color:white; font-size:20px; font-weight:bold; }
        .logo-text .logo-motto { display:block; color:#fde100; font-size:14px; font-style:italic; }
        .main-menu ul { display:flex; }
        .main-menu li { margin-left:35px; }
        .main-menu a { color:white; font-weight:bold; font-size:16px; padding-bottom:20px; position:relative; transition:color 0.3s; }
        .main-menu a .dropdown-arrow { font-size:12px; margin-left:4px; }
        .main-menu a.active { color:#fde100; }
        .main-menu a.active::after { content:''; position:absolute; bottom:0; left:0; width:100%; height:4px; background-color:#fde100; }
        .main-menu a:not(.active):hover { color:#fde100; }

        /* Info section */
        .content { padding-top: 130px; }
        .info-section { background-color:#0f4a0a; color:#fff; padding:25px 0; }
        .container.column-layout { flex-direction:column; align-items:flex-start; }
        .info-block { width:100%; margin-bottom:15px; }
        .info-block h3 { font-size:18px; font-weight:bold; margin-bottom:8px; }
        .info-block p { font-size:16px; line-height:1.5; }
        .info-divider { border:0; height:2px; background-color:#d8baff; width:100%; margin:20px 0; }

        /* Main content and sidebar */
        .page-content { display:flex; gap:30px; padding:30px 0; align-items:flex-start; width:100%; }
        .main-content-area { flex:3; background-color:#fff; padding:25px; border:1px solid #ddd; border-radius:5px; }
        .main-content-area h2 { color:#333; margin-bottom:15px; }
        .main-content-area p { color:#555; line-height:1.6; margin-bottom:15px; }
        .sidebar { flex:1; background-color:#f9f9f9; padding:20px; border:1px solid #ddd; border-radius:5px; }
        .sidebar h3 { color:#333; margin-bottom:15px; border-bottom:2px solid #0f4a0a; padding-bottom:8px; }
        .sidebar-links li { margin-bottom:12px; }
        .sidebar-links a { color:#0f4a0a; font-weight:bold; transition:all 0.2s ease-in-out; }
        .sidebar-links a:hover { color:#000; text-decoration:underline; }

        /* Running total table */
        table, td, th { border:1px solid black; padding:8px; }
        table { border-collapse:collapse; width:100%; }
        input[type="number"]:focus { border:1.5px solid blue; outline:none; }
    </style>
</head>
<body>

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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <!-- Running total -->
            <form action="" method="post">
                <fieldset>
                    <legend>Running Total of all TextBoxes</legend>
                    <table>
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

