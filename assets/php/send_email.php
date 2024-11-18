<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!$email) {
        echo "Invalid email address.";
        exit;
    }

    // Email configuration
    $to = 'dineshravi1910@gmail.com';
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Message content
    $emailMessage = "You have received a new message from the contact form:\n\n";
    $emailMessage .= "Full Name: $fullname\n";
    $emailMessage .= "Email: $email\n\n";
    $emailMessage .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $emailMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>

.download-button {
  display: inline-block;
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 14px;
  color: #fff;
  background-color: #333; /* Matches your theme's dark background */
  border: 1px solid #555;
  border-radius: 4px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  transition: background-color 0.3s, border-color 0.3s;
}

.download-button:hover {
  background-color: #444; /* Slightly lighter on hover */
  border-color: #777;
  cursor: pointer;
}

