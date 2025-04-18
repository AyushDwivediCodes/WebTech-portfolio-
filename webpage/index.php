<?php
// Common header function
function displayHeader($title, $activePage) {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . $title . ' - My Portfolio</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body class="bg-light text-dark">
    
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">My Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link ' . ($activePage == "home" ? "active" : "") . '" href="./index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link ' . ($activePage == "gallery" ? "active" : "") . '" href="./gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link ' . ($activePage == "portfolio" ? "active" : "") . '" href="./portfolio.html">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link ' . ($activePage == "contact" ? "active" : "") . '" href="./contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>';
}

// Common footer function
function displayFooter() {
    $currentYear = date("Y");
    echo '
        <!-- Footer Section -->
        <footer class="bg-dark text-white text-center py-3 mt-5">
            <div class="container">
                <p class="mb-0">&copy; ' . $currentYear . ' Ayush Dwivedi. All Rights Reserved.</p>
                <p class="small mb-0">Last updated: ' . date("F j, Y") . '</p>
                <div class="mt-2">
                    <a href="https://github.com/ayushdwivedicodes" class="text-white mx-2" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                    <a href="https://www.linkedin.com/in/ayush-dwivedi-925686274/" class="text-white mx-2" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </footer>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
}

// Display home page content
displayHeader("Home", "home");
?>

<!-- Home Section -->
<section id="home" class="container my-5 p-5 bg-white shadow rounded">
    <h1 class="text-center">Welcome to My Website!</h1>
    <p class="text-center">This is my personal portfolio where you can learn about my projects, skills, and contact me.</p>

    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-code-slash fs-1 text-primary mb-3"></i>
                    <h3>Developer</h3>
                    <p>Passionate about creating efficient, elegant code solutions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-mortarboard-fill fs-1 text-success mb-3"></i>
                    <h3>Student</h3>
                    <p>Excelling academically with a CGPA of 9.6 at SRM AP University.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-lightbulb fs-1 text-warning mb-3"></i>
                    <h3>Problem Solver</h3>
                    <p>Turning complex problems into simple, elegant solutions.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-5">About Me</h2>
    <div class="card bg-info-subtle border-dark">
        <div class="card-body">
            <p>Hi, I am Ayush Dwivedi, a passionate student at SRM AP University. I am currently excelling in academics with a CGPA of 9.6.</p>
            <p>I love coding and solving problems. My goal is to become a skilled developer capable of solving complex problems efficiently.</p>
            <p>This website is built with HTML, CSS, Bootstrap, and PHP to showcase my skills and projects.</p>
        </div>
    </div>
    
    <div class="text-center mt-4">
        <a href="portfolio.php" class="btn btn-primary">View Portfolio</a>
        <a href="contact.php" class="btn btn-success ms-2">Contact Me</a>
    </div>
</section>

<?php
displayFooter();
?>