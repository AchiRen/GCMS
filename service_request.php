<?php
include "db_connect.php";

try {
  $conn = new PDO("mysql:host=localhost; dbname=gcms2", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Connection Failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $username = $_POST["username"];
  $service_name = $_POST["service_name"];
  $city = $_POST["city"];
  $service = $_POST["service"];
  $message = $_POST["message"];


  $sql = "INSERT INTO submitted_requests (first_name, last_name, email, mobile, username, service_name, city, service, message) 
  VALUES(:first_name, :last_name, :email, :mobile, :username, :service_name, :city, :service, :message)";

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(":first_name", $first_name);
  $stmt->bindParam(":last_name", $last_name);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":mobile", $mobile);
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":service_name", $service_name);
  $stmt->bindParam(":city", $city);
  $stmt->bindParam(":service", $service);
  $stmt->bindParam(":message", $message);

  try {
    $stmt->execute();
    header("Location: quote_success.php");
  }
  catch(PDOException $e) {
    echo "error: " . $e->getMessage();  
  }
  
}

?>