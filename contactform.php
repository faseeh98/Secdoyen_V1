<?php
  if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "saeed.ahmed@secdoyen.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received a message from ".$name." via your website contact form.\n\nPhone number: ".$phone.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
  }