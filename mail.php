<?php $name = $_POST['name'];
$phone = $_POST['phone'];
$email_date = date("m-d-Y H:i:s");
$email = $_POST['email'];
$budget = $_POST['budget'];
$message = $_POST['message'];
$formcontent="From: $name \nPhone: $phone \nBudget: $budget \nEmail: $email \n\nMessage: $message";
$recipient = "youremail@yourprovider.com";
$subject = "New GoCaption Message - ".$email_date;
$mailheader = "From: info@gocaption.us \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<script>window.location.href = "../index.html";</script>';
?>