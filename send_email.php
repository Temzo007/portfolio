<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Specify the recipient email
    $to = "youremail@example.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
}
?>
