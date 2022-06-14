<?php
  if (isset($_POST['contact'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "info@meetway.tech";
    $headers = "From: ".$email;

    mail($mailTo, $subject, $message, $headers);
    header("Location: index.php?sent");
  }
?>