<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'youremail@example.com';
  $subject = 'New message from your website';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "<p>Thanks for contacting us!</p>";
  } else {
    echo "<p>Oops, something went wrong. Please try again later.</p>";
  }
}
?>