<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailForm = $_POST['mail'];
  $subjectForm = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "hasnainrazaa03@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have a message ".$message;

  mail($mailTo, $name, $txt, $subjectForm, $headers);

  header("Location: index.html?MessageSent");

}

?>