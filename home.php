<?php
include "db_connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="script" href="main">
    <title>Dawac Garbage Collectors</title>
</head>
<body>
  <section class="header">
    <nav>
        <a href="home.php"> <img src="images/dawac-logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                <li><a href="quotation form1.php">Get Quote</a></li>
                <li><a href="Sign_up.php" class="btn-2">Sign up</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="text-box">
        <h1>DAWAC GARBAGE COLLECTORS</h1>
        <p>WELCOME TO DAWAC GARBAGE COLLECTORS, your reliable partner in keeping your environment clean and healthy. We are a team of dedicated 
            professionals committed to providing efficient and sustainable garbage collection and sanitation services to our clients.
        </p>
        <a href="about.php" class="hero-btn">Visit us to know more</a>
    </div>
  </section>  

  <!--about us-->

  <section class="about">
    <div class="head">
        <h1>About Us</h1>
        <p>At Dawac Garbage Collectors, we understand that every client has unique needs, and we strive to deliver customized solutions that 
            meet those needs. Whether you're a homeowner, a business owner, or a property manager, we have the expertise and resources to handle all 
            your garbage collection and sanitation needs.
        </p>
    </div>
    
    <div class="row">
        <div class="about-col">
            <h3>Mission</h3>
            <p>Our mission is to provide reliable and efficient garbage collection and sanitation services that help to keep our community clean and healthy.
                We are committed to reducing waste and promoting sustainability by implementing environmentally-friendly practices such as 
                recycling and composting. We aim to build long-term relationships with our clients by delivering exceptional service and 
                fostering trust and transparency. We are constantly seeking ways to improve and innovate our services to better meet the needs
                of our clients and the environment.
            </p>
        </div>
        <div class="about-col">
            <h3>Vision</h3>
            <p>Our vision is to become a leader in the garbage collection and sanitation industry by providing sustainable,innovative, and efficient
                services that exceed our clients' expectations. We envision a future where our community is clean, healthy and thriving, and 
                we are committed to playing an integral role in achieveing that vision.
            </p>
        </div>
        <div class="about-col">
            <h3>Core Values</h3>
            <ol>Partnership</ol>
            <ol>Equity</ol>
            <ol>Responsiveness</ol>
            <ol>Customer satisfaction</ol>
            <ol>Empowerment</ol>
            <ol>Excellence</ol>
        </div>
    </div>
  </section>

  <!--services-->

  <section class="services">
    <div class="head">
        <h1>Our Services</h1>
        <p>At Dawac Garbage Collectors, we offer a comprehensive range of garbage collection and sanitation services to meet the needs of our clients.
            We are committed to providing sustainable and efficient solutions that promote environmental responsibility and public health. Please 
            browse our services section to learn more about our offerings, or contact us today to schedule a consultation. We look forward to serving you!
        </p>
    </div>

    <div class="row">
        <div class="services-col">
            <img src="images/truck.png">
            <h3>Garbage Collection</h3>
            <p>At Dawac Garbage Collectors, we understand the impotance of efficient and reliable garbage collection services. Our team of experienced 
                professionals is dedicated to keeping your surroundings clean and ensuring proper waste management.
            </p>
        </div>
        <div class="services-col">
            <img src="images/office-clean1.jpg">
            <h3>Office Cleaning</h3>
            <p>We understand the importance of maintaining a clean and healthy work environment. Our dedicated team of professional cleaners are 
                here to provide comprehensive office cleaning services tailored to meet the unique needs of your business.
            </p>
        </div>
        <div class="services-col">
            <img src="images/window-clean2.jpg">
            <h3>Window Cleaning</h3>
            <p>We understand the importance of maintaining a clean and pristine environment, both indoors and outdoors. That's why we offer professional 
                window cleaning services to complement our comprehensive waste management solutions.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="services-col">
            <img src="images/Washroom-Cleaning.jpg">
            <h3>Washroom Cleaning</h3>
            <p>We understand the importance of maintaining clean and hygenic washrooms in commercial and residential properties. Our professional washroom 
                cleaning services are designed to ensure that your washroom facilities are pristine, sanitized and presentable at all times.
            </p>
        </div>
        <div class="services-col">
            <img src="images/car.jpeg">
            <h3>Car Cleaning</h3>
            <p>We offer a range of comprehensive car cleaning services to meet your specific needs. Our skilled technicians use industry -leading 
                techniques and eco-friendly products to give your vehice a sparkling clean finish.
            </p>
        </div>
        <div class="services-col">
            <img src="images/garden.jpeg">
            <h3>Landscaping/Gardening</h3>
            <p>We believe in creating beautiful and sustainable outdoor spaces that enhance the quality of life for our customers. Our gardening and 
                landscaping services are designed to transform your property into a vibrant and inviting environment.
            </p>
        </div>
    </div>
  </section>

  <!--get quote button-->

  <section class="quote">
    <div class="container">
        <div class="quote-text">
            <h3>Got a job? let <br><span>Dawac Collectors</span><br> do it for you</h3>
        </div>
        <button type="button" onclick="window.location.href='quotation form1.php';">Get Quote</button>
    </div>

  </section>

  <!--footer-->

  <footer>
    <div class="row">
        <div class="col">
            <img src="images/dawac-logo.png" class="footer-logo">
            <p class="footer-about">Your reliable partner in keeping your environment clean and healthy. We are a team of dedicated 
                professionals committed to providing efficient and sustainable garbage collection and sanitation services to our clients.
            </p>
        </div>
        <div class="col">
            <h3>Office <div class="bottom_line"><span></span></div></h3>
            <p>dash dash building</p>
            <p>Kawangware</p>
            <p>Along Naivasha road, Nairobi Kenya.</p>
            <p class="footer-email">ambosheirene@gmail.com</p>
            <h4>+254 702257113</h4>
        </div>
        <div class="col">
            <h3>Quick Links <div class="bottom_line"><span></span></div></h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                <li><a href="quotation form1.php">Get Quote</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>Links <div class="bottom_line"><span></span></div></h3>
            <ul>
                <li><a href="admin_login.php">Admin Login</a></li>
                <li><a href="staff_login.php">Staff Login</a></li>
            </ul>

            <div class="social-icons">
                <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">
                    <img class="social-icon" src="images/FB.jpg" alt="Facebook">
                </a>
                <a href="https://twitter.com/i/flow/login" target="_blank">
                    <img class="social-icon" src="images/BIRD.jpg" alt="twitter">
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <img class="social-icon" src="images/IG.jpg" alt="instagram">
                </a>
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright">Dawac Garbage Collectors &copy;2022 - All Rights Reserved.</p>
  </footer>








  <!--javascript for togggle menu-->

  <script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
  </script>
</body>
</html>