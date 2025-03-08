<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $latitude = $_POST["lat"];
    $longitude = $_POST["long"];

    $to = "output.ripening741@passinbox.com";  // Masked email address
    $subject = "Coordinates Report";
    $message = "Latitude: $latitude\nLongitude: $longitude";
    $headers = "From: no-reply@yourdomain.com";

    // Using PHP's mail() function (you can replace it with an SMTP service like PHPMailer)
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
