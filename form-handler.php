<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'TechWorld';

$email_subject = 'New Form Submission';

$email_body = 'User name: $name./n'.
              'User email: $email./n'.
              'Subject: $subject./n'.
              'User messsage: $message./n';

$to = 'khofi.ronald@gmail.com';

$headers = 'From: $email_from \r\n';

$headers .= 'Reply-to: $visitor_email \r\n';

mail($to, $email_subject, $email_body, $headers);

header('Location: contact.html');


?>