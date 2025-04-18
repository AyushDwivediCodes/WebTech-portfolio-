<!-- contact.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - My Portfolio</title>
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
                    <li class="nav-item"><a class="nav-link" href="./gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="./portfolio.html">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="./contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section id="contact" class="container my-5 p-5 bg-white shadow rounded">
        <h2 class="text-center mb-4">Contact Me</h2>
        <p>Email: <a href="mailto:dwivedi_ayush@srmap.edu.in">dwivedi_ayush@srmap.edu.in</a></p>
        <p>Phone: +91 9999999999</p>

        <form class="bg-light p-4 rounded border" onsubmit="return validateForm()">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" class="form-control" placeholder="example@domain.com" required>
                <div id="emailHelp" class="form-text text-danger"></div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <div class="input-group">
                    <select id="country-code" class="form-select" required>
                        <option value="+91">+91 (India)</option>
                        <option value="+1">+1 (USA)</option>
                        <option value="+44">+44 (UK)</option>
                        <option value="+61">+61 (Australia)</option>
                        <option value="+81">+81 (Japan)</option>
                        <option value="+49">+49 (Germany)</option>
                        <option value="+33">+33 (France)</option>
                        <option value="+971">+971 (UAE)</option>
                        <option value="+55">+55 (Brazil)</option>
                        <option value="+82">+82 (South Korea)</option>
                        <option value="other">Other (Specify)</option>
                    </select>
                    <input type="text" id="custom-country-code" class="form-control" placeholder="Custom Code" style="display:none;">
                    <input type="tel" id="phone" class="form-control" pattern="[0-9]{10}" placeholder="1234567890" required>
                </div>
                <div id="phoneHelp" class="form-text text-danger"></div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </section>

    <script>
        document.getElementById('country-code').addEventListener('change', function() {
            const customCodeInput = document.getElementById('custom-country-code');
            if (this.value === 'other') {
                customCodeInput.style.display = 'block';
                customCodeInput.required = true;
            } else {
                customCodeInput.style.display = 'none';
                customCodeInput.required = false;
            }
        });

        document.getElementById('email').addEventListener('input', function() {
            const email = this.value.trim();
            const emailHelp = document.getElementById('emailHelp');
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (!emailPattern.test(email) && email !== '') {
                emailHelp.textContent = 'Please enter a valid email address.';
            } else {
                emailHelp.textContent = '';
            }
        });

        document.getElementById('phone').addEventListener('input', function() {
            const phone = this.value.trim();
            const phoneHelp = document.getElementById('phoneHelp');
            const phonePattern = /^[0-9]{10}$/;

            if (!phonePattern.test(phone) && phone !== '') {
                phoneHelp.textContent = 'Please enter a valid 10-digit phone number.';
            } else {
                phoneHelp.textContent = '';
            }
        });

        function validateForm() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const countryCode = document.getElementById('country-code').value === 'other' ? document.getElementById('custom-country-code').value.trim() : document.getElementById('country-code').value;
            const phone = document.getElementById('phone').value.trim();
            const message = document.getElementById('message').value.trim();

            if (name === '' || email === '' || countryCode === '' || phone === '' || message === '') {
                alert('All fields are required!');
                return false;
            }

            alert('Form submitted successfully!');
            return true;
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>