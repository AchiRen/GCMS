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
    <title>Service Request Success</title>
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background: #c8e8e0;
        }
        .header{
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
        .btn-2{
            background-color: lime;
            padding: 10px 25px;
            border-radius: 30px;
            color: black;
            transition: 0.4s ease-in-out;
            text-decoration: none;
        }
        .btn-2:hover{
            background-color: forestgreen;
        }

        .container{
            position: absolute;
            top: 30%;
            width: 1366px;
            height: 250px;
            padding: 25px;
            box-sizing: border-box;
            background-color: rgb(2, 49, 2);
        }
        .container h1{
            text-align: center;
            font-size: 24px;
            color: #fff;
            margin-bottom: 10px;
        }
        .container p{
            text-align: center;
            font-size: 16px;
            color: #fff;
        }
    </style>
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
        <h1>Successful!</h1>
        <p>Your service request has been successfully submitted!</p>
    </div>
    
</body>
</html>