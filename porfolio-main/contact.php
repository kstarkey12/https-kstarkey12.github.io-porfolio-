<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $concern = $_POST["concern"];

  $to = "ktarkey47@gmail.com";
  $subject = "New Contact Form Submission";
  $message = "Name: " . $name . "\nEmail: " . $email . "\nConcern: " . $concern;
  $headers = "From: " . $email;

  // Send the email
  mail($to, $subject, $message, $headers);

  // Redirect to a thank you page
  header("Location: thank-you.html");
  exit();
}
?>
