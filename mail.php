<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $number = $_POST["mobile"];

    // You can add additional validation or sanitization here

    $to = "asimysuru@gmail.com"; // Replace with your actual email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us! We will get back to you shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>