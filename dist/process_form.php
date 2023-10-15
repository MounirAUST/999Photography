<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "icommit.69@gmail.com"; // Your email address
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message!";
    } else {
        // Email could not be sent
        echo "Oops, something went wrong. Please try again later.";
    }
} else {
    // Redirect the user back to the form page if they access this page directly
    header("Location: your_form_page.html");
}
?>
