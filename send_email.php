<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $userSubject = $_POST['subject'];
    $userMessage = $_POST['message'];

    if (!empty($name) && !empty($mobile) && !empty($email) && !empty($userSubject) && !empty($userMessage)) {
        $to = 'ambosheirene@gmail.com';
        $subject = 'Contact Us Page Submission';

        // Email message
        $message = "<html><body>";
        $message .= "<h2>Contact Us Page Submission</h2>";
        $message .= "<p><strong>Name:</strong> $name</p>";
        $message .= "<p><strong>Mobile:</strong> $mobile</p>";
        $message .= "<p><strong>Email:</strong> $email</p>";
        $message .= "<p><strong>Subject:</strong> $userSubject</p>";
        $message .= "<p><strong>Message:</strong></p>";
        $message .= "<p>$userMessage</p>";
        $message .= "</body></html>";

        // Email headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: $email" . "\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo 'Thank you for your message. We will get back to you soon.';
        } else {
            echo 'Sorry, an error occurred. Please try again later.';
        }
    } else {
        echo 'Please fill in all the required fields.';
    }
}
?>
