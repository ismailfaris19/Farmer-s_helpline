<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $contact = $_POST['contact'];
  $message = $_POST['message'];

  $email_from = 'farisismail157@gmail.com';

  $email_subject ="FARMER NEED HELP";

  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User contactno: $contact.\n".
                "User Message: $message.\n";
  
  $to = "ismailfaris1999@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-to: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");
      

?>