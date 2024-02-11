<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];

    // Email information
    $to = "basitkhoso14@gmail.com";
    $subject = "New Form Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Comments: $comments\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
