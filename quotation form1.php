<?php
include "db_connect.php";
session_start();
include "service_request.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/quote.css">
    <title>Get a Quote</title>
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
        <header>Quote Form</header>
    
        <form action="service_request.php" method="POST">
            <div class="form-first">
                <div class="details-personal">
                    <span class="title">Personal Details
    
                        <div class="fields">
                            <div class="input-field">
                                <label>First name</label>
                                <input type="text" name="first_name" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Last name</label>
                                <input type="text" name="last_name" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Email Address</label>
                                <input type="email" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Mobile number</label>
                                <input type="text" name="mobile" placeholder="Enter your mobile number" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Enter your username" required>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="details-course">
                    <span class="title">Service Quote Details
    
                        <div class="fields">
                            <div class="input-field">
                                <label>Name</label>
                                <input type="text" name="service_name" placeholder="Enter service name" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>City/Town</label>
                                <input type="text" name="city" placeholder="Enter the location" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Service Intrested In</label>
                                <select name="service">
                                    <option value="select"></option>
                                    <option value="Commecial Cleaning">Commercial Cleaning</option>
                                    <option value="Washroom Solutions">Washroom Solutions</option>
                                    <option value="Window Cleaning">Window Cleaning</option>
                                    <option value="Car Cleaning">Car Cleaning</option>
                                    <option value="Landscapping/Gardening">Landscapping/Gardening</option>
                                    <option value="Garbage Collection">Garbage Collection</option>
                                </select>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input-field">
                                <label>Message</label>
                                <textarea rows="5" name="message" placeholder="enter details about the specifics of the service requested"></textarea>
                            </div>
                        </div>
                    </span>
                    <button type="submit">Send</button>
                </div>
            </div>
        </form>
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