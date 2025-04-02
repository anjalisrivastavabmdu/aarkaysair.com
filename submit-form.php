<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    
    // Email address where you want to receive the form submissions
    $to_email = "aarkayshepa@gmail.com";

    // Email subject
    $subject = "New Form Submission";

    // Email content
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nMessage:\n$message";

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to_email, $subject, $email_body, $headers)) {
        // Output JavaScript alert
                echo "<script>alert('Thank you for your message. Our team will contact you shortly.'); window.location.href = 'https://aarkaysair.com/';</script>";

        exit;
    } else {
        // Output JavaScript alert
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
    }
} else {
    // If it's not a POST request, redirect back to the form page
    header("Location:thank-you.html");
    exit;
}
?>
