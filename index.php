<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sculpt</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png">
    <link rel="stylesheet" href="index.css">
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
     <div class="form-popup">
        <div class="form-box">
            <button class="close-btn">&times;</button>
            <div class="form-details">
                <h2>Welcome Back!</h2>
                <p>Please log in using your details.</p>
            </div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <form action="#">
                    <div class="input-field">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <a href="#" class="forgot-pass">Forgot Password?</a>
                    <button type="submit">Log In</button>
                </form>
                <div class="bottom">
                    Dont have an account?
                    <a href="signup.html" class="signup">Signup</a>
                </div>
            </div>
        </div>
     </div>

     
    <script src="index.js"></script> 
</body>
</html>