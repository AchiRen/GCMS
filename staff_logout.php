<?php
session_start();

include "db_connect.php";

$logout_time = date('Y-m-d H:i:s'); 
$update_logout_query = "UPDATE login_records SET logout_time = :logout_time WHERE id = :id";
$stmt = $conn->prepare($update_logout_query);
$stmt->bindParam(':logout_time', $logout_time);
$stmt->bindParam(':id', $login_record_id);
$stmt->execute();

session_unset();
session_destroy();

header("Location: staff_login.php");
exit();
?>
