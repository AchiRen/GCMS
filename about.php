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
    <link rel="stylesheet" href="CSS/about.css">
    <title>About us</title>
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
    </section>

    <section id="about">
        <div class="about-1">
            <h1>About Us</h1>
            <p>At Dawac Garbage Collectors, we understand that every client has unique needs, and we strive to deliver customized solutions that 
                meet those needs. Whether you're a homeowner, a business owner, or a property manager, we have the expertise and resources to handle all 
                your garbage collection and sanitation needs.
                Our team of friendly and knowledgeable staffis always ready to assist you with any questions you ahve. We value transparency and open communication, 
                and we are committed to providing exceptional customer service every step of the way.
            </p>
        </div>
        <div id="about-2">
            <div class="content-box-ig">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <h3>MISSION</h3>
                                <hr>
                                <p>Our mission is to provide reliable and efficient garbage collection and sanitation services that help to keep our community clean and healthy.
                                    We are committed to reducing waste and promoting sustainability by implementing environmentally-friendly practices such as 
                                    recycling and composting. We aim to build long-term relationships with our clients by delivering exceptional service and 
                                    fostering trust and transparency. We are constantly seeking ways to improve and innovate our services to better meet the needs
                                    of our clients and the environment.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <h3>VISION</h3>
                                <hr>
                                <p>Our vision is to become a leader in the garbage collection and sanitation industry by providing sustainable,innovative, and efficient
                                    services that exceed our clients' expectations. We envision a future where our community is clean, healthy and thriving, and 
                                    we are committed to playing an integral role in achieveing that vision.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <h3>CORE VALUES</h3>
                                <hr>
                                    <ol>Partnership</ol>
                                    <ol>Equity</ol>
                                    <ol>Responsiveness</ol>
                                    <ol>Customer satisfaction</ol>
                                    <ol>Empowerment</ol>
                                    <ol>Excellence</ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="choose">
        <div class="row1">
            <div class="box1">
                <h3>Why Choose Dawac Garbage Collectors?</h3>
                <ol>Experienced and Trained Staff: Our staff are highly trained, experienced, and dedicated to delivering exceptional results.
                    They undergo regular training to stay updated with the latest techniques and industry best practices.
                </ol>
                <ol>Quality Assurance: Our team conducts regular inspections and quality checks to maintain the highest standards of cleanliness. 
                    We strive for excellence in every aspect of our service to ensure your complete satisfaction.
                </ol>
                <ol>Attention to Detail: We pay close attention to every aspect of your request to ensure exceptional results.</ol>
                <ol>Customer satisfaction: our goal is to exceed you expectations and deliver outstanding service that enhances th beauty and value of your property.</ol>
            </div>
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