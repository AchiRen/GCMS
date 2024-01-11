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
    <link rel="stylesheet" href="CSS/services.css">
    <title>Services</title>
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

    <!--services-->

    <h1>Our Services</h1>
    <div class="row1">
        <div class="box1">
            <img src="images/truck.png">
            <h3>Garbage Collection</h3>
            <p>At Dawac Garbage Cpllectors, we understand the impotance of efficient and reliable garbage collection services to maintain a clean and healthy environment. Our team of experienced 
                professionals is dedicated to providing top-notch garbage collection services tailored to your specific needs, keeping your 
                surroundings clean, and ensuring proper waste management. Whether you require residential, commercial, or industrial garbage collection, 
                we've got you covered.
            </p>
            <h4>Residential Garbage Collection</h4>
            <p>our residential garbage colection services are designed to make your life easier. We offer scheduled pickups on designated days 
                to ensure your household waste is disposed of responsibly. our team will provide you with durable garbage papers, allowing for convenient 
                waste segregation. Rest assured that we follow strict environmental guidelines to ensure proper disposal and recycling of the collected waste.
            </p>
            <h4>Commercial Garbage collection</h4>
            <p>For businesses of all sizes, our commercial garbage collection services are designed to meet your unique requirements. We understand 
                that efficient waste management is crucial for maintaining a clean and professional environment. Whether you operate a small office or a 
                large retail space, we offer flexible collection schedules and customizable solutions to accomodate your needs. our team will work closely with 
                you to develop a waste management plan that aligns with your business goals.
            </p>
            <h4>Additional Services</h4>
            <ol>Special Event cleanup: Planning an event? Our team can assist you with waste management during and after the event, ensuring a clean and 
                tidy space.
            </ol>
            <ol>Bulk waste removal: If you have large items or bulky waste that needs to be disposed of, we offer convenient bulk waste removal services.</ol>
        </div>

        <div class="box1">
            <img src="images/office-clean1.jpg">
            <h3>Office Cleaning</h3>
            <p>We understand the importance of maintaining a clean and healthy work environment. Our dedicated team of professional cleaners are 
                here to provide comprehensive office cleaning services tailored to meet the unique needs of your business. Whether you run a small startup or a large corporate office, we have the expertise and resources to ensure your workspace is spotless
                and presentable.
            </p>
            <h4>Our Office Cleaning Services Include:</h4>
            <ol>General Cleaning: Our Team will throroughly clean and sanitize all areas of your office,including workstations,conference rooms, 
                reception ares,kitchens, and restrooms. We will dust surfaces, vacuum carpets, mop floors, and remove trash,leaving your office looking fresh and inviting.
            </ol>
            <ol>Special Requests: We are flexible and willing to accommodate any special cleaning requests you may have. Whether you need specific areas
                to be prioritized, additional cleaning during events, or customized cleaning schedules, our team will work closely with you to ensure tour satisfaction.
            </ol>
            </span>
        </div>

        <div class="box1">
            <img src="images/window-clean.jpg">
            <h3>Window Cleaning</h3>
            <p>We understand the importance of maintaining a clean and pristine environment, both indoors and outdoors. That's why we offer professional 
                window cleaning services to complement our comprehensive waste management solutions. Our dedicated team of experts is trained and 
                equipped to handle window cleaning tasks for residential, commercial, and industrial properties.
            </p>
        </div>       

        <div class="box1">
            <img src="images/garden.jpeg">
            <h3>Gardening/Landscaping</h3>
            <p>We believe in creating beautiful and sustainable outdoor spaces that enhance the quality of life for our customers. Our gardening and 
                landscaping services are designed to transform your property into a vibrant and inviting environment. Whether you need assitance with 
                maintaining a small garden or require a complete landscape design and installation, our experienced team is here to help.
            </p>
            <h4>Our Gardening and landscaping services include:</h4>
            <ol>Garden maintenance: Regular lawn mowing, trimming, and edging to keep your garden neat and tidy. Pruning and shaping of shrubs
                and hedges for a well-manicured appearance. Weed control and pest management to ensure a healthy garden. Seasonal plantings and flowerbed
                maintenance to add color and freshness.
            </ol>
            <ol>Landscape design and installation: Custom landscape design tailored to your preferences and property requiurements. Selection and installation 
                of trees, plants, and flowers that thrive in your local climate.
            </ol>
            <ol>Tree care and Maintenance: Tree pruning and trimming for improved health, safety, and aesthetics. Tree removal services, including stump grinding 
                and debris cleanup. Emergency tree services for storm-damaged or hazardous trees.
            </ol>
        </div>

        <div class="box1">
            <img src="images/Washroom-Cleaning.jpg">
            <h3>Washroom Cleaning</h3>
            <p>We understand the importance of maintaining clean and hygenic washrooms in commercial and residential properties. Our professional washroom 
                cleaning services are designed to ensure that your washroom facilities are pristine, sanitized and presentable at all times. With 
                our experienced team and top-notch equipment, we guarantee exceptional cleanliness and customer satisfaction.
            </p>
            <h4>Our Washroom Cleaning Services Include:</h4>
            <ol>Thorough Cleaning: Our skilled cleaners will meticulously clean all washroom surfaces, including tolilets, urinals, sinks, countertops, 
                mirrors, and floors. We use effective disinfectants and cleaning agents to eliminate germs, bacteria, and unpleasant odors.
            </ol>
            <ol>Toliet and Urinal Sanitization: We pay special attention to toilet bowls and urinals, ensuring they are thoroughly sanitized 
                and free from stains, scale, and bacteria buildup. Our team uses industry-leading products to provide a hygenic environment for users.
            </ol>
            <ol>Floor and Tile Cleaning: We employ advanced cleaning techniques to remove dirt, grime, and bacteria from washroom floors and tiles. Our 
                experts will scrub and mop the floors, paying attention to corners and hard-to-reach areas, leaving them spotless and germ-free.
            </ol>
            <ol>Regular Maintenance: We offer flexible cleaning schedules to meet your specific needs. Whether you require daily,weekly, or monthly washroom 
                cleaning, our team will work with you to create a customized plan that suits your requirements.
            </ol>
        </div>

        <div class="box1">
            <img src="images/car.jpeg">
            <h3>Car Cleaning</h3>
            <p>We offer a range of comprehensive car cleaning services to meet your specific needs. Our skilled technicians use industry -leading 
                techniques and eco-friendly products to give your vehice a sparkling clean finish. Whether you're looking for a regular car wash or a deep 
                interior cleaning, we've got you covered.
            </p>
            <h4>Our car cleaning services include:</h4>
            <ol>Exterior Car Wash: Thorough hand washing of the exterior. Removal of dirt, grime, and road contaminants. Drying and polishing for a glossy shine.
                Tire and rim cleaning.
            </ol>
            <ol>Interior Cleaning: Vacuuming and dusting of seats,carpets, and floor mats. Cleaning and conditioning of leather surfaces. Window cleaning for 
                a streak-free shine. Deodorizing to eliminate odors.
            </ol>
            <ol>Premium Detailing: Complete interior nad exterior cleaning. Spot removal and stain treatment. Upholstery stream cleaning. Engine bay cleaning. 
                Application of protective coatings for long-lasting shine.
            </ol>
            <ol>Odor Removal: We use specialized techniques to eliminate persistent odors from your vehicle.</ol>
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