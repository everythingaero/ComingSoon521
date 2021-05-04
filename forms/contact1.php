<?php

echo "<pre>";

print_r($_POST);
echo "<pre>";
$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];

$to = "hasnainrazaa03@gmail.com";
$body = "";

$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$userEmail. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to, $messageSubject, $body);

?>
