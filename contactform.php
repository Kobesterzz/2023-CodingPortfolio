<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "kobeshaw330@gmail.com";  
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
    echo "Message sent successfully. Thank you!";
} else {
    echo "Something went wrong. Please try again.";
}
?>