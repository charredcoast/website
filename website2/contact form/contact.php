<?php

 $name = $_Post['name'];
 $visitor_email = $_Post['email'];
 $message = $_Post['message'];

 $email_form = 'premvaity007@gmail.com';

 $email_subject = "new form submision";

 $email_body = "User name: $name. \n".
               "User Email:$visitor_email. \n".
               "User message: $message. \n";


 $to = "premv0089@gmail.com";

 $headers = "from: $email_from \r\n";

 $headers .= "reply-to: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("location : contact.html");               


?>