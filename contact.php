<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Recipient email address
    $to = "weber09882665@gmail.com";

    // Email subject
    $subject = "New message from $name";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo json_encode(["success" => true]);
    } else {
        // Failed to send email
        echo json_encode(["success" => false, "message" => "Failed to send email."]);
    }
} else {
    // Invalid request method
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
}
?>
