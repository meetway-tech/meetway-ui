<?php
  if (isset($_POST['subscribe'])) {
    $email = $_POST['subscribe-email'];
    $subject = "New subscriber";

    $mailTo = "info@meetway.tech";
    $headers = "From: ".$email;
    $message = "You have a new subscriber ".$email;

    mail($mailTo, $subject, $message, $headers);
    header("Location: index.html?subscribed");
  }
?>