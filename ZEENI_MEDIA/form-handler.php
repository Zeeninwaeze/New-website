<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "stanleynwaezegezercn@gmail.com";
  $subject = "New Message from $name";
  $body = "From: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "<p style='color:green;'>Thank you, $name! Your message has been sent successfully.</p>";
  } else {
    echo "<p style='color:red;'>Sorry, something went wrong. Please try again later.</p>";
  }
}
?>
