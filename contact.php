<?php
$demo-name = $_POST['demo-name'];
$demo-email = $_POST['demo-email'];
$demo-category = $_POST['demo-category'];
$demo-message = $_POST['demo-message'];
$demo-human = $_POST['demo-human'];
$recipient = "farah_farouk@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $demo-category, $demo-message, $demo-human) or die("Error!");
echo "Thank You!";
?>