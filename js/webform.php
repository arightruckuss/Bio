<?php
     if (isset($_POST['submit'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];

      // Set your email address where you want to receive emails. 
       $to = 'rucktooa@yahoo.com';
       $subject = 'Contact Request From Website';
       $headers = "From: ".$name." <".$email."> \r\n";
       mail($to,$subject,$message,$headers);
  }
  ?>