<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Podaci iz forme
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SMTP server i autentifikacija
    $smtpServer = 'smtp.gmail.com';
    $smtpUsername = 'raspopovicm3@gmail.com';
    $smtpPassword = 'mihajlo112';
    $smtpPort = 587;

    // E-pošta na koju šaljemo
    $to = 'raspopovicm3@gmail.com';

    // Zaglavlje e-pošte
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Poruka e-pošte
    $email_message = "Subject: $subject\n\n";
    $email_message .= "From: $name <$email>\n";
    $email_message .= "Message:\n$message";

    // Slanje e-pošte
    if (mail($to, $subject, $email_message, $headers, "-f $smtpUsername")) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
}
?>

