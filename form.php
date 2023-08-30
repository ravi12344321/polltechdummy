<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'dmain name';

$email_subject = ' New from submission';

$email_boady ="User name:$name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message. \n";
            
$to = 'email_accout _where_ email_will be sent';

$headers ="Form: $email_from \r\n";

$headers ="Reply-to:$visitor_email \n\r";

mail($to,$email_subject,$email_boady,$headers);

header("location: contact.html");

?>