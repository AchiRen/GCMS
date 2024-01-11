<?php
include "db_connect.php";
session_start();
include "signup.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .header{
            min-height: 30vh;
            width: 100%;
            background-color: rgb(37, 202, 37);
            background-position: center;
            background-size: cover;
            position: relative;
        }
        nav{
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }
        nav img{
            width: 150px;
        }
        .nav-links{
            flex: 1;
            text-align: right;
        }
        .nav-links ul li{
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }
        .nav-links ul li a{
            color: black;
            text-decoration: none;
            font-size: 15px;
        }
        .nav-links ul li::after{
            content: '';
            width: 0%;
            height: 2px;
            background: lime;
            display: block;
            margin: auto;
            transition: 0.5s;
        }
        .nav-links ul li:hover::after{
            width: 100%;
        }
        .hero-btn{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 34px;
            font-size: 13px;
            background: transparent;
            position: relative;
            cursor: pointer;
        }
        .hero-btn:hover{
            border: 1px solid lime;
            background: lime;
            transition: 1s;
        }
        html,body{
            margin: 0;
            padding: 0;
        }
        .container{
            margin: 10px 50px;
        }
        .form-group0{
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        button{
            width: 200px;
            padding: 15px;
            margin-left: 250px;
            background: lime;
            color: #fff;
            border: solid 1px black;
            border-radius: 33px;
            cursor: pointer;
            transition: all 38s ease-in-out;
        }
        button:hover{
            background: rgb(71, 70, 70);
            color: #fff;
        }
        table tr td{
            border: solid 1px #eee;
            padding: 10px;
        }
        .form-group:before{
        content: "~";
        color: forestgreen;
        }
        .container{
            width: 640px;
            height: 660px;
            align-items: center;
            border: 5px solid lime;
        }
        .he{
            text-align: center;
            font-size: 50px;

        }
        .c1{
            margin-left: auto;
            margin-right: auto;
        }

        footer{
            width: 100%;
            background: linear-gradient(to right,#04f324, #000000);
            color: #fff;
            padding: 50px 0 30px;
            font-size: 16px;
            line-height: 20px;
        }
        .row{
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }
        .col{
            flex-basis: 25%;
            padding: 10px;
        }
        .col:nth-child(2), .col:nth-child(3){
            flex-basis: 15%;
        }
        .footer-logo{
            width: 80px;
            position: relative;
            top: -23px;
            left: -20px;
        }
        .footer-about{
            position: relative;
            top: -23px;
        }
        .col h3{
            width: fit-content;
            margin-bottom: 40px;
            position: relative;
        }
        .footer-email{
            width: fit-content;
            border-bottom: 1px solid #4bf635;
            margin: 20px 0;
        }
        .col ul li{
            list-style: none;
            margin-bottom: 12px;
        }
        .col ul li a{
            text-decoration: none;
            color: #fff;
        }
        .col form .icon{
            font-size: 18px;
            margin-right: 10px;
        }
        .col form input{
            width: 100%;
            background: transparent;
            color: #ccc;
            border: 0;
            outline: none;
        }
        .col form button{
            background: transparent;
            border: 0;
            outline: none;
            cursor: pointer;
        }
        .col form button .icon-right{
            font-size: 16px;
            color: #ccc;
        }
        .col .social-icons .social-icon{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #fff;
            background: #37f810;
            margin-right: 15px;
            padding: 5px;
            cursor: pointer;
        }
        hr{
            width: 90%;
            border: 0;
            border-bottom: 1px solid #ccc;
            margin: 20px auto;
        }
        footer .copyright{
            text-align: center;
        }
        .bottom_line{
            width: 100%;
            height: 5px;
            background: #767676;
            border-radius: 3px;
            position: absolute;
            top: 25px;
            left: 0;
            overflow: hidden;
        }
        .bottom_line span{
            width: 15px;
            height: 100%;
            background: #45f635;
            border-radius: 3px;
            position: absolute;
            top: 0;
            left: 10px;
            animation: moveline 2s linear infinite;
        }
        @keyframes moveline{
            0%{
                left: -20px;
            }
            100%{
                left: 100%;
            }
        }
    </style>
    
</head>
<body>
    <div class="header">
        <header>
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
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </header>
    </div>
   <div class="container">
    <h2 class="he"><u>Sign-up Form</u></h2>
    <br><br>
    <form action="" method="POST">
        <div class="form-group">
            <label for="first name">First Name:</label>
            <input type="text" name="first_name" id="firstname">
        </div><br><br>
        <div class="form-group">
            <label for="middle name">Middle Name:</label>
            <input type="text" name="middle_name" id="middlename">
        </div><br><br>
        <div class="form-group">
            <label for="last name">Last Name:</label>
            <input type="text" name="last_name" id="lastname">
        </div><br><br>
        <div class="form-group">
            <label for="phone number">Phone number:</label>
            <input type="text" name="phone_number" id="phonenumber">
        </div><br><br>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email_address" id="email">
        </div><br><br>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location">
        </div><br><br>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div><br><br>
        <div class="form-group">
            <label for="passsword">Password:</label>
            <input type="password" name="password" id="password">
        </div><br><br>
        <div class="form-group">
            <label for="password_confirmation">Confirm password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div><br><br>

        <button type="submit">Sign Up</button>
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


    <script>
        var password= document.getElementById("password") ,confirm_password = document.getElementById("password2");
        function validatePassword(){
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("passwords dont match");
            }else {
                confirm_password.setCustomValidity("");
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>