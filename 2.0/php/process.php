<?php
 
    $to = "webmaster@freenters.com";  //Change email here
    $from = $_POST['email']; 
    $name = $_POST['name']; 
    $headers = "From: $from"; 
    $subject = "New Message"; 
 
    $fields = array(); 
    $fields{"name"} = "name";	
    $fields{"email"} = "email"; 
    $fields{"message"} = "message";
 
    $body = "Message details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
 
?>
