<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$fmessage= $_POST['message'];

mail(to,subject,body,header)






$from = 'forms.infysolution.com'
$to = 'dehaleesanraju@gmail.com';
$body = "First Name: $fname.\n".
        "Last Name :$lname.\n".
        "Mail Id :$mail.\n".
        "Message :$message.\n";
$headers =  "From :".$from.
            "Reply-To :".$email;
mail($to,$subject,$body,$headers);
header("Location:contact.html")

?>