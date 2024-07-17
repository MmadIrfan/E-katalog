<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "marketing@aestheticrattan.com";
    $subject = "Inquiry about Rattan Furniture";
    $message = "Hello,\n\n";
    $message .= "I am interested in learning more about " . $_POST['name'] . ".\n\n";
    $message .= "Thank you!";
    
    $headers = "From: " . $_POST['email'] . "\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    
    mail($to, $subject, $message, $headers);
    
    echo "Email sent!";
}
?>