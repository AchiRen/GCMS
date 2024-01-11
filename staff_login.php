<?php
include "db_connect.php";
session_start();
include "staff_log.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Staff login</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="home.php"> <img src="images/dawac-logo.png"></a>
            <div class="nav-links" id="navLinks">
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
        <form action="" method="POST">
            <div class="login-box">
                <h1>Staff Login</h1>

                <div class="textbox">
                    <input type="text" placeholder="Username" name="username" value="">
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" value="">
                </div>
                <input class="button" type="submit" name="Login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>