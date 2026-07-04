<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sculpt</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <div class="logo"><img src="assets/logo.png"></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="about.html" target="_blank">About Us</a></li>
                <li><a href="contact.html" target="_blank">Contact</a></li>
                <li><a href="service.html" target="_blank">Our Services</a></li>
            </ul>
            <button class="login-btn">LOG IN</button>
        </nav>
    </header>
    <!-- Popup form -->
    <div id="popup-container"></div>
    <!-- Hero -->
    <section class="hero">
        <div class="hero-text">
            <h1>Welcome to Sculpt</h1>
            <p class="tagline">Elevate your Beauty, Define your confidence.</p>
            <p class="description">
                Premium salon services designed to help you look and feel your best.
            </p>
            <button class="btn">Book an Appointment</button>
        </div>

        <div class="hero-image">
            <img src="assets/salon1.jpg" alt="Sculpt salon">
        </div>
    </section>

    <!-- Why Choose Sculpt -->
    <section class="why">
        <h2>Why Choose Sculpt?</h2>
        <p class="description center">Every detail, from the chair to the finish, is considered.</p>

        <div class="why-list">
            <div class="why-item">
                <h3>Master Stylists</h3>
                <p class="description">Trained across international techniques, our stylists bring precision and artistry to every visit.</p>
            </div>

            <div class="why-item">
                <h3>Premium Products</h3>
                <p class="description">We use only clean, salon-grade formulas that protect and nourish your hair and skin.</p>
            </div>

            <div class="why-item">
                <h3>Effortless Booking</h3>
                <p class="description">Reserve your slot in seconds and walk in to a chair, not a waiting room.</p>
            </div>

            <div class="why-item">
                <h3>Consistent Results</h3>
                <p class="description">A tailored consultation before every service means you leave with the look you asked for.</p>
            </div>
        </div>
    </section>
    <!-- Services -->
     <!-- Our Services -->
    <section class="services">
        <h2>Our Services</h2>
        <p class="description center">Our most loved treatments, crafted to help you look and feel your best.</p>

        <div class="services-list">
            <div class="card">
                <img src="assets/haircut.jpg" alt="Haircut & Styling">
                <h3>Haircut & Styling</h3>
                <p class="description">Precision cuts and styling tailored to your face and lifestyle.</p>
            </div>

            <div class="card">
                <img src="assets/haircolour.jpg" alt="Hair Coloring">
                <h3>Hair Coloring</h3>
                <p class="description">Vibrant, long-lasting color using premium salon-grade formulas.</p>
            </div>

            <div class="card">
                <img src="assets/facial.jpg" alt="Facial Treatment">
                <h3>Facial Treatment</h3>
                <p class="description">Rejuvenating facials that leave your skin glowing and refreshed.</p>
            </div>

            <div class="card">
                <img src="assets/nail.jpg" alt="Nail Extensions">
                <h3>Nail Extensions</h3>
                <p class="description">Durable and quality extensions, shaped and finished to your style.</p>
            </div>
        </div>

        <a href="service.html" class="btn service-btn">Learn More</a>
    </section>
    <!-- footer -->
     
    <footer class="footer">
        <div class="footer-top">
            <div class="footer-col">
                <img src="assets/logo.png" class="footer-logo">
                <p class="description">Premium salon services designed to help you look and feel your best.</p>
            </div>

            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="service.html">Our Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Contact</h3>
                <p class="description">Main Road, Biratnagar</p>
                <p class="description">+977 9835463272</p>
                <p class="description">hello@sculpt.com</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Sculpt. All rights reserved.</p>
        </div>
    </footer>
    
    
    <script src="login.js"></script> 
</body>
</html>             