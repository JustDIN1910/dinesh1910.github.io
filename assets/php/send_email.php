<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "dineshravi1910@gmail.com";
  $subject = "New Message from Portfolio Contact Form";

  // Sanitize input
  $fullname = htmlspecialchars(trim($_POST["fullname"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  // Validate email for lowercase only
  if ($email !== strtolower($email)) {
    echo "Error: Email should be in lowercase.";
    exit;
  }

  // Email content
  $body = "Name: $fullname\nEmail: $email\nMessage:\n$message";

  // Headers
  $headers = "From: $email";

  // Attempt to send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message. Please try again later.";
  }
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

