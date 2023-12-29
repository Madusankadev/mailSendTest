<?php


//add mail send file to project
include "SMTP.php";
include "Exception.php";
include "PHPMailer.php";

// use PHPMailer class in PHPmailer File
use PHPMailer\PHPMailer\PHPMailer;

$reciver = $_POST["r"];
$subject = $_POST["s"];
$conetent = $_POST["c"];


//Note pad code
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'isharamadusanka.info@gmail.com'; // add Our Email 
            $mail->Password = 'ptqb laus tony bqpw'; // add our gmail password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('isharamadusanka.info@gmail.com', 'Test Email'); // add our email and any text
            $mail->addReplyTo('isharamadusanka.info@gmail.com', 'Test Email'); // add our email and any text
            $mail->addAddress($reciver); // add email reciver 
            $mail->isHTML(true);
            $mail->Subject = $subject; //add subject
            $bodyContent = $conetent; // add content
            $mail->Body    = $bodyContent;


if (!$mail->send()) {
    echo ("Failed");
} else {
    echo ("Success");
}


?>