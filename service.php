<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Services | Salon Appointment</title>
<link rel="stylesheet" href="css/service.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<?php
    require_once("header.php");
?>

<section class="services">
  <div class="center">
    <h2>Our Services</h2>
    <p class="tagline">Book an appointment for the service you love</p>
  </div>

  <div class="services-container">

    <div class="service-card">
      <img src="assets/haircare.png" alt="Hair Care">
      <h2>Hair Care</h2>
      <div class="speciality">✨ Speciality: Keratin Smoothening</div>
      <p class="desc">Haircut, styling, and coloring by our expert stylists.</p>
      <ul>
        <li><span class="item-icon"><i class="fa-solid fa-scissors"></i></span> Haircut &amp; Styling</li>
        <li><span class="item-icon"><i class="fa-solid fa-palette"></i></span> Hair Coloring</li>
        <li><span class="item-icon"><i class="fa-solid fa-pump-soap"></i></span> Hair Spa Treatment</li>
        <li><span class="item-icon"><i class="fa-solid fa-droplet"></i></span> Keratin Treatment</li>
      </ul>
      <div class="price">Rs. 800 <span>onwards</span></div>
      <a href="#" class="btn">Book Now</a>
    </div>

    <div class="service-card featured">
      <img src="assets/facial.png" alt="Skin and Facial" style="object-position:center 60%;">
      <h2>Skin &amp; Facial</h2>
      <div class="speciality">✨ Speciality: Gold Radiance Facial</div>
      <p class="desc">Refresh and rejuvenate your skin with our signature facials.</p>
      <ul>
        <li><span class="item-icon"><i class="fa-solid fa-leaf"></i></span> Organic Facial</li>
        <li><span class="item-icon"><i class="fa-solid fa-crown"></i></span> Gold Radiance Facial</li>
        <li><span class="item-icon"><i class="fa-solid fa-hourglass-half"></i></span> Anti-Aging Treatment</li>
        <li><span class="item-icon"><i class="fa-solid fa-sun"></i></span> Skin Whitening Facial</li>
      </ul>
      <div class="price">Rs. 1,500 <span>onwards</span></div>
      <a href="#" class="btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="assets/nail.png" alt="Nail Care">
      <h2>Nail Care</h2>
      <div class="speciality">✨ Speciality: Custom Nail Art</div>
      <p class="desc">Pamper your hands and feet with our nail care packages.</p>
      <ul>
        <li><span class="item-icon"><i class="fa-solid fa-hand-sparkles"></i></span> Manicure</li>
        <li><span class="item-icon"><i class="fa-solid fa-shoe-prints"></i></span> Pedicure</li>
        <li><span class="item-icon"><i class="fa-solid fa-paint-brush"></i></span> Nail Art</li>
        <li><span class="item-icon"><i class="fa-solid fa-gem"></i></span> Gel Polish</li>
      </ul>
      <div class="price">Rs. 700 <span>onwards</span></div>
      <a href="#" class="btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="assets/bride.png" alt="Bridal Package" style="object-position:center 55%;">
      <h2>Bridal Package</h2>
      <div class="speciality">✨ Speciality: HD Bridal Makeup</div>
      <p class="desc">Complete bridal makeover for your special day.</p>
      <ul>
        <li><span class="item-icon"><i class="fa-solid fa-spray-can-sparkles"></i></span> Bridal Makeup</li>
        <li><span class="item-icon"><i class="fa-solid fa-scissors"></i></span> Hair Styling</li>
        <li><span class="item-icon"><i class="fa-solid fa-spa"></i></span> Full Body Spa</li>
        <li><span class="item-icon"><i class="fa-solid fa-calendar-check"></i></span> Trial Session Included</li>
      </ul>
      <div class="price">Rs. 8,000 <span>onwards</span></div>
      <a href="#" class="btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="assets/spa1.png" alt="Body Spa and Massage">
      <h2>Body Spa &amp; Massage</h2>
      <div class="speciality">✨ Speciality: Aromatherapy Massage</div>
      <p class="desc">Relax your body and mind with our therapeutic spa sessions.</p>
      <ul>
        <li><span class="item-icon"><i class="fa-solid fa-spa"></i></span> Full Body Massage</li>
        <li><span class="item-icon"><i class="fa-solid fa-seedling"></i></span> Aromatherapy</li>
        <li><span class="item-icon"><i class="fa-solid fa-shower"></i></span> Body Scrub &amp; Polish</li>
        <li><span class="item-icon"><i class="fa-solid fa-fire"></i></span> Steam &amp; Sauna</li>
      </ul>
      <div class="price">Rs. 2,000 <span>onwards</span></div>
      <a href="#" class="btn">Book Now</a>
    </div>

    <div class="service-card">
      <img src="assets/grooming.png" alt="Men's Grooming">
      <h2>Men's Grooming</h2>
      <div class="speciality">✨ Speciality: Beard Styling</div>
      <p class="desc">Complete grooming solutions designed for men.</p>
      <ul>
        <li><span class="item-icon"><i class="fa-solid fa-scissors"></i></span> Haircut &amp; Beard Trim</li>
        <li><span class="item-icon"><i class="fa-solid fa-head-side-virus"></i></span> Head Massage</li>
        <li><span class="item-icon"><i class="fa-solid fa-face-laugh"></i></span> Facial &amp; Cleanup</li>
        <li><span class="item-icon"><i class="fa-solid fa-paint-brush"></i></span> Hair Color</li>
      </ul>
      <div class="price">Rs. 600 <span>onwards</span></div>
      <a href="#" class="btn">Book Now</a>
    </div>

  </div>
</section>

<?php
    include_once("footer.php");
?>
</body>
</html>