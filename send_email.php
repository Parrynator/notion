<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email recipient
$to = "jarrod.hodge@veolia.com";

// Email subject
$subject = "New Message from Website";

// Email body
$body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
