<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address
    $to = "alicia.n.creative@gmail.com";
    $subject = "New Contact Form Submission from " . $name;
    
    // Email body
    $body = "Name: $sender-name\n";
    $body .= "Email: $sender-email\n\n";
    $body .= "Subject:\n$subject";
    $body .= "Message:\n$message";

    // Headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
