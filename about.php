<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us — Sculpt</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <!-- Navigation Bar (same as home page) -->
     <?php
     include ("header.php");
     ?>
    <!-- About Us page content -->
    <main class="about-page">

        <!-- Hero with background image -->
        <section class="about-hero">
            <div class="about-hero-box">
                <span class="eyebrow">About the studio</span>
                <h1 class="about-title">Where every visit leaves you feeling <em>renewed</em></h1>
                <p class="about-lede">Sculpt is a beauty studio built around one idea: good care should be unhurried. From hair colour to nail art, every treatment here is done by hand, one guest at a time.</p>
                <a href="service.html" class="btn-outline">See our services</a>
            </div>
        </section>

        <!-- Story -->
        <section class="story-section">
            <span class="eyebrow">Our story</span>
            <h2>Just opened, and already obsessed with the details</h2>
            <p>Sculpt just opened its doors, built on a simple idea: a good haircut, a well-shaped nail, or a proper facial can change the way you walk out the door. We're a small studio, not a big chain, and we like it that way &mdash; it means every guest gets our full attention.</p>
            <p>Our team trained across colour theory, nail artistry, and skincare before opening this space, and we're starting small on purpose &mdash; fewer chairs, more attention, and the chance to actually get to know the people who walk in.</p>
            <p class="pull-quote">We're brand new, but we're not new to this. Come be one of our first regulars.</p>
        </section>

        <!-- Values -->
        <section class="values-section">
            <div class="section-head">
                <span class="eyebrow">What guides us</span>
                <h2>Care, craft, and confidence</h2>
            </div>
            <div class="value-grid">
                <div class="value-card">
                    <h3>Genuine care</h3>
                    <p>We listen before we suggest &mdash; every colour, cut, or facial starts with understanding what you actually want.</p>
                </div>
                <div class="value-card">
                    <h3>Trained craft</h3>
                    <p>Every stylist and technician is certified in their specialty and keeps learning through regular workshops.</p>
                </div>
                <div class="value-card">
                    <h3>Lasting confidence</h3>
                    <p>The goal isn't just how you look leaving the chair &mdash; it's how you feel a week later, styling it yourself.</p>
                </div>
            </div>
        </section>

        <!-- Services strip -->
        <section class="services-band">
            <span class="eyebrow eyebrow-center">Under one roof</span>
            <h2>Everything your look needs</h2>
            <div class="service-row">
                <div class="service-item">
                    <h4>Hair treatment</h4>
                    <p>Deep conditioning &amp; scalp care</p>
                </div>
                <div class="service-item">
                    <h4>Colour &amp; styling</h4>
                    <p>Cuts, colour, and blow-outs</p>
                </div>
                <div class="service-item">
                    <h4>Nail extension</h4>
                    <p>Gel, acrylic &amp; nail art</p>
                </div>
                <div class="service-item">
                    <h4>Facial treatment</h4>
                    <p>Cleansing, glow &amp; anti-ageing</p>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="team-section">
            <div class="section-head">
                <span class="eyebrow">Meet the team</span>
                <h2>The hands behind the results</h2>
            </div>
            <div class="team-grid">
                <div class="team-card">
                    <div class="avatar-circle">AR</div>
                    <h3>Aanya Rai</h3>
                    <div class="role">Hair &amp; colour lead</div>
                    <p class="bio">Trained for years elsewhere, now bringing her balayage and curly-cut skills to Sculpt.</p>
                </div>
                <div class="team-card">
                    <div class="avatar-circle">SM</div>
                    <h3>Sneha Mahat</h3>
                    <div class="role">Nail artist</div>
                    <p class="bio">Known for hand-painted nail art and long-lasting gel extensions.</p>
                </div>
                <div class="team-card">
                    <div class="avatar-circle">PT</div>
                    <h3>Priya Thapa</h3>
                    <div class="role">Skincare specialist</div>
                    <p class="bio">Certified esthetician focused on facials suited to Nepali skin types.</p>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats-band">
            <div class="stats-grid">
                <div>
                    <div class="num">New</div>
                    <div class="label">Freshly opened studio</div>
                </div>
                <div>
                    <div class="num">3</div>
                    <div class="label">Trained specialists</div>
                </div>
                <div>
                    <div class="num">4</div>
                    <div class="label">Core treatments offered</div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-section">
            <h2>Ready for your next appointment?</h2>
            <p>Pick a treatment, choose a time that works for you, and we'll take care of the rest.</p>
            <a href="service.html" class="btn-primary">Book an appointment</a>
        </section>

    </main>

   <?php
    include ("footer.php");
   ?>
</body>
</html>