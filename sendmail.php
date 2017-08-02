<?php

// getting variables from form
$emailTo = "oplengs@gmail.com";
$Name = trim($_REQUEST['Name']);
$emailFrom = trim($_REQUEST['Email']);
$number = trim($_REQUEST['Number']);
$Message = trim($_REQUEST['Message']);
$headers = "From: ".$emailFrom. "\r\n" .
"CC:".$emailTo ;
// prepare email body text

$Body = "You have a message from: ";
$Body .= $Name;
$Body .= "\n";
$Body .= $number;
$Body .= "\n";
$Body .= $emailFrom;
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;

// send prepared message

$sent = mail($emailTo, 'From Resume', $Body ,$headers);

//callback for jQuery AJAX

if ($sent){
    echo 'sent';
}
else{}

print_r($_REQUEST); die();
?>