<?php
if(isset($_POST['submit'])) {
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $mailFrom= $_POST['subject'];
    $mesage= $_POST['message'];

    $mailTo = "dj_galaxystar@yahoo.com";

    mail();
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.". \n\n".$mesage;
   
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
