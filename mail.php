<?php

   $to = "almightyxrn@gmail.com";
   $subject = "Checking PHP mail";

   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers = "From:" . $from;
   mail($to,$subject,$message, $headers);
?>