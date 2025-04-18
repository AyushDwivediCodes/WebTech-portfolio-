<!-- gallery.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery - My Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <base href="./">
</head>
<body class="bg-light text-dark">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="./gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="./portfolio.html">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Gallery Section -->
    <section id="gallery" class="container my-5 p-5 bg-white shadow rounded">
        <h2 class="text-center mb-4">Gallery</h2>
        <div class="row g-4">
            <div class="col-md-6"><img src="profile.jpg" alt="Project 1" class="img-fluid rounded shadow"></div>
            <div class="col-md-6"><img src="profile.jpg" alt="Project 2" class="img-fluid rounded shadow"></div>
            <div class="col-md-6"><img src="profile.jpg" alt="Project 3" class="img-fluid rounded shadow"></div>
            <div class="col-md-6"><img src="profile.jpg" alt="Project 4" class="img-fluid rounded shadow"></div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>