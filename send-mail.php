<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $cooling_for = htmlspecialchars($_POST["cooling_for"]);
    $location = htmlspecialchars($_POST["location"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "sales@aarkaysair.com";  // 🔹 Replace with your email
    $subject = "New Product Inquiry from $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/html; charset=UTF-8" . "\r\n";

    $body = "
        <h2>New Product Inquiry</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Cooling Required for:</strong> $cooling_for</p>
        <p><strong>City/Location:</strong> $location</p>
        <p><strong>Message:</strong> $message</p>
    ";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html"); // 🔹 Redirect to Thank You page
        exit();
    } else {
        echo "Error Sending Message.";
    }
}
?>
