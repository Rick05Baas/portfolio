<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "rickleeuwtje@gmail.com";

    $subject = "New Contact Form Submission from $name";

    $email_body = "Name: \n$name\n";
    $email_body .= "Email: \n$email\n";
    $email_body .= "Message:\n$message";

    if (mail($to, $subject, $email_body)) {
        echo "Thank you for your submission!";
    } else {
        echo "An error occurred. Please try again later.";
    }

    header('Location: ../contact/thanks/');
}
?>