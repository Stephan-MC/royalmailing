<?php

require 'vendor/autoload.php';

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Sends an email with the specified message and email address.
 *
 * @param string $recipientEmail The recipient's email address.
 * @param string $message The message to be sent.
 * @return void
 */
function sendOrderTrackingEmail($recipientEmail, $message) {
    // Create a new PHPMailer instance
    $phpmailer = new PHPMailer(true);

    try {
        // Server settings
        $phpmailer->isSMTP();                                    // Send using SMTP
        $phpmailer->Host       = 'smtp-relay.brevo.com';     // Set the SMTP server to send through
        $phpmailer->SMTPAuth   = true;                           // Enable SMTP authentication
        $phpmailer->Port       = 587;                           // TCP port to connect to
        $phpmailer->Username   = '75a0e9001@smtp-brevo.com';               // SMTP username
        $phpmailer->Password   = 'QB1J2WkPcfmrhUGS';                 // SMTP password

        // Recipients
        $phpmailer->setFrom('no-reply@globalshippingnetworks.com', 'Global Express Agency');
        $phpmailer->addAddress($recipientEmail);
        $phpmailer->addBCC('globalshippingnetworks@gmail.com');   
        $phpmailer->addBCC('mundestephane13@gmail.com');                // Add a recipient
        // $phpmailer->addReplyTo('your_reply_to@example.com', 'Your Company Name'); // Set Reply-To address

        // Content
        $phpmailer->isHTML(true);                                // Set email format to HTML
        $phpmailer->Subject = 'Your Order Tracking Information';
        $phpmailer->Body    = $message;                          // Set the email message
        $phpmailer->AltBody = strip_tags($message);              // Set the plain text message for non-HTML clients

        // Send the email
        $phpmailer->send();
        echo 'Message has been sent';
    } catch (\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
    }
}

// Example usage
$recipientEmail = 'sheybelvin5@gmail.com';
$message = '<p>Dear Customer,</p><p>Your order has been shipped. You can track your order using the following link: <a href="http://example.com/track-order">Track Order</a></p><p>Thank you for shopping with us!</p>';
sendOrderTrackingEmail($recipientEmail, $message);
?>
