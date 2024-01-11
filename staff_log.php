<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST['username']);
  $password = test_input($_POST['password']);

  $dsn = 'mysql:host=localhost; dbname=gcms2';
  
  try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Fail to connect to the database " . $e->getMessage();
  }

  $stmt = $conn->prepare("SELECT * FROM staff_login WHERE username = :username AND password = :password");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->execute();
  $user = $stmt->fetch();

  if ($stmt->errorInfo()[0] !== '00000') {
    echo "Database error: " . $stmt->errorInfo()[2];
    die();
  }

  if ($user) {
    // Successful login
    // Start a session and store relevant user data if needed
    session_start();
    $_SESSION['staff_id'] = $user['id'];
    $_SESSION['staff_username'] = $user['username'];

     // Record login event
     $login_time = date('Y-m-d H:i:s');
     $insert_login_query = "INSERT INTO login_records (staff_id, staff_username, login_time) VALUES (:staff_id, :staff_username, :login_time)";
     $stmt = $conn->prepare($insert_login_query);
     $stmt->bindParam(':staff_id', $user['id']);
     $stmt->bindParam(':staff_username', $user['username']);
     $stmt->bindParam(':login_time', $login_time);
     $stmt->execute();

    header("Location: staffpage.php");
    exit();
  } else {
    // Failed login
    echo "<script language='javascript'>";
    echo "alert('WRONG INFORMATION')";
    echo "</script>";
  }
}
?>
