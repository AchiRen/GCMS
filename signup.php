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
  $middle_name = $_POST["middle_name"];
  $last_name = $_POST["last_name"];
  $phone_number = $_POST["phone_number"];
  $email_address = $_POST["email_address"];
  $location = $_POST["location"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO user (first_name, middle_name, last_name, phone_number, email_address, location, username, password) 
  VALUES(:first_name, :middle_name, :last_name, :phone_number, :email_address, :location, :username, :password)";

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(":first_name", $first_name);
  $stmt->bindParam(":middle_name", $middle_name);
  $stmt->bindParam(":last_name", $last_name);
  $stmt->bindParam(":phone_number", $phone_number);
  $stmt->bindParam(":email_address", $email_address);
  $stmt->bindParam(":location", $location);
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":password", $hashedPassword);

  try {
    $stmt->execute();
    header("Location: success.php");
  }
  catch(PDOException $e) {
    echo "error: " . $e->getMessage();  
  }
  
}

?>