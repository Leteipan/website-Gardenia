<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$need = $_POST['need'];
$message= $_POST['message'];
 
$to = "Therapigarden@gmail.com";
$subject = "This is the subject line";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Need = " . $need "\r\n Message =" . $message;
 
$headers = "From: https://garden-website-pi.vercel.app/contact.html" . "\r\n" .
            "CC: https://garden-website-pi.vercel.app/index.html";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:contact.html");
?>
