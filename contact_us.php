<?php
include "db_connect.php";
session_start();
include "send_email.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact us</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="home.php"> <img src="images/dawac-logo.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact_us.php">Contact us</a></li>
                    <li><a href="quotation form1.php">Get Quote</a></li>
                    <li><a href="Sign_up.php" class="btn-2">Sign up</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="container">
        <h1>Connect with us</h1>
        <p>We would love to respond to your queries and help you help us make the environment clean.
            <br>Feel free to get in touch with us.
        </p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your request</h3>
                <form action="" method="POST">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter your name">
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" name="mobile" placeholder="Enter your number">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" name="subject" placeholder="Enter your subject">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="5" name="message" placeholder="Your message"></textarea>

                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach us</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@example.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>07123456789</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>kawangware, Along Naivasha road, Nairobi</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

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
            <h3>Links <div class="bottom_line"><span></span></div></h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                <li><a href="quotation form1.php">Get Quote</a></li>
            </ul>
        </div>
        <div class="col">
            
            <div class="social-icons">
                <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">
                    <img class="social-icon" src="images/FB.jpg" alt="Facebook">
                </a>
                <a name="logo-twitter" href="https://twitter.com/i/flow/login" target="_blank">
                    <img class="social-icon" src="images/BIRD.jpg" alt="twitter">
                </a>
                <a name="logo-instagram" href="https://www.instagram.com/" target="_blank">
                    <img class="social-icon" src="images/IG.jpg" alt="instagram">
                </a>
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright">Dawac Garbage Collectors &copy;2022 - All Rights Reserved.</p>
  </footer>
</body>
</html>