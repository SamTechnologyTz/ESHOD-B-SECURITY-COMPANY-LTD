<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pokea data kutoka kwenye fomu
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Sanitize email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Tuma ujumbe kwa email yako
        $to = "your-email@example.com";  // Badilisha hii na email yako
        $subject = "Ujumbe mpya kutoka $name";
        $body = "Jina: $name\nEmail: $email\nUjumbe: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Asante kwa kutuma ujumbe. Tutawasiliana nawe hivi karibuni.";
        } else {
            echo "Samahani, ujumbe haukuweza kutumwa.";
        }
    } else {
        echo "Tafadhali ingiza email sahihi.";
    }
}
?>