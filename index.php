<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sculpt — Premium Salon Services in Biratnagar</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        require_once("header.php");
    ?>
    <main>
        <!-- Hero -->
        <section class="hero">
            <div class="hero-text">
                <h1>Welcome to Sculpt</h1>
                <p class="tagline">Elevate your Beauty, Define your confidence.</p>
                <p class="description">Premium salon services designed to help you look and feel your best.</p>
                <a class="btn" href="service.html">Book an Appointment</a>
            </div>
            <div class="hero-image">
                <img src="assets/salon1.jpg" alt="Interior view of Sculpt salon" loading="eager">
            </div>
        </section>

        <div class="divider"><span></span></div>

        <!-- Why Choose Sculpt -->
        <section class="why">
            <h2>Why Choose Sculpt?</h2>
            <p class="description center">Every detail, from the chair to the finish, is considered.</p>
            <div class="why-list">
                <div class="why-item">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20 L15 9 M13 7l4 4 M17.5 6.5a2 2 0 1 0-3-3 2 2 0 0 0 3 3z M9 20l-3-3"/></svg>
                    </div>
                    <div>
                        <h3>Master Stylists</h3>
                        <p class="description">Trained across international techniques, our stylists bring precision and artistry to every visit.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c2 3 5 6.5 5 10.5a5 5 0 0 1-10 0C7 8.5 10 5 12 2z"/></svg>
                    </div>
                    <div>
                        <h3>Premium Products</h3>
                        <p class="description">We use only clean, salon-grade formulas that protect and nourish your hair and skin.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3.5" y="5" width="17" height="16" rx="2"/><path d="M3.5 9.5h17 M8 3v4 M16 3v4"/></svg>
                    </div>
                    <div>
                        <h3>Effortless Booking</h3>
                        <p class="description">Reserve your slot in seconds and walk in to a chair, not a waiting room.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12.5l4.5 4.5L20 6"/></svg>
                    </div>
                    <div>
                        <h3>Consistent Results</h3>
                        <p class="description">A tailored consultation before every service means you leave with the look you asked for.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="divider"><span></span></div>

        <!-- Services -->
        <section class="services">
            <h2>Our Services</h2>
            <p class="description center">Our most loved treatments, crafted to help you look and feel your best.</p>
            <div class="services-list">
                <div class="card">
                    <img src="assets/haircut.jpg" alt="Haircut and styling" loading="lazy">
                    <h3>Haircut & Styling</h3>
                    <p class="description">Precision cuts and styling tailored to your face and lifestyle.</p>
                </div>
                <div class="card">
                    <img src="assets/haircolour.jpg" alt="Hair coloring" loading="lazy">
                    <h3>Hair Coloring</h3>
                    <p class="description">Vibrant, long-lasting color using premium salon-grade formulas.</p>
                </div>
                <div class="card">
                    <img src="assets/facial.jpg" alt="Facial treatment" loading="lazy">
                    <h3>Facial Treatment</h3>
                    <p class="description">Rejuvenating facials that leave your skin glowing and refreshed.</p>
                </div>
                <div class="card">
                    <img src="assets/nail.jpg" alt="Nail extensions" loading="lazy">
                    <h3>Nail Extensions</h3>
                    <p class="description">Durable and quality extensions, shaped and finished to your style.</p>
                </div>
            </div>
            <a href="service.html" class="btn service-btn">Learn More</a>
        </section>
    </main>

    <!-- CTA banner -->
    <section class="cta-banner">
        <div>
            <h2>Ready for your next look?</h2>
            <p>Book a slot in seconds and let our stylists take it from there.</p>
        </div>
        <a href="service.html" class="btn">Book Now</a>
    </section>

    <!-- footer -->
    <?php
    include_once("footer.php");
    ?>
