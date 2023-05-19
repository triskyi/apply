<?php
$to = 'tresorbi29@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: triskyi59@gmail.com';

if (mail($to, $subject, $message, $headers)) {
  echo 'Email sent successfully.';
} else {
  echo 'Email sending failed.';
}
?>
