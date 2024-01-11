<?php
include "db_connect.php";
session_start();

if (isset($_SESSION['user_id']) && isset($_POST['field_name']) && isset($_POST['new_value'])) {
    $userId = $_SESSION['user_id'];
    $field = $_POST['field_name'];
    $newValue = $_POST['new_value'];

    $validFields = ['first_name', 'last_name', 'group_id', 'email_address', 'phone_number', 'physical_address', 'next_of_kin', 'kin_phone_number',  'username', 'password'];

    if (in_array($field, $validFields)) {
        $query = "UPDATE admin SET $field = :value WHERE username = :user_id";

        try {
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':value', $newValue);
            $stmt->bindParam(':user_id', $userId);
            $stmt->execute();
            echo "Success";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Invalid field";
    }
} else {
    echo "Invalid request";
}
?>
