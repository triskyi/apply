<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set the recipient email address
  $to = 'triskyi59@gmail.com';
  $subject = 'New Contact Form Submission';
  
  // Build the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message: $message\n";
  
  // Set the headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Send the email
  if (mail($to, $subject, $email_content, $headers)) {
    echo "Thank you! Your message has been sent successfully.";
  } else {
    echo "Oops! An error occurred while sending your message. Please try again.";
  }
}
?>
