<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];


  $to = "scriptforprince@gmail.com";
  $subject = "New form submission";
  $body = "Name: $name\nEmail: $email\nPhone: $phone";

  if (mail($to, $subject, $body)) {
    header("Location: thank-you.php");
    exit();
  } else {
    echo "There was a problem sending your message. Please try again later.";
  }
}
?>