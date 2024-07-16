<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = 'muhammadirfan12002@gmail.com';  // Replace with your email address
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email body
    $body = "
        <html>
        <head>
            <title>$subject</title>
        </head>
        <body>
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $fname $lname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>
    ";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to...";
    } else {
        echo "Email sending failed...";
    }
} else {
    echo "Invalid request method.";
}
?>
