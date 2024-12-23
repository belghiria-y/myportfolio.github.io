<?php
// Email recipient
$to = "belghiria@gmail.com";

// Email subject
$subject = "Test Email";

// Email message
$message = "This is a test email sent from PHP.";

// Email headers
$headers = "From: support@intsargam.com\r\n";
$headers .= "Reply-To: support@intsargam.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
