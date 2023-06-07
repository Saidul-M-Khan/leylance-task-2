<?php

$email   = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email   = $_POST['email'];

$to = "saidulmursalinkhan@gmail.com";

$headers = "From: " . $email . "\r\n" . "CC: khan_saidul@yahoo.com";

$txt = "You have received this email from " . $email . "\r\n Message: " . $message . "\r\n";

if ( $email != NULL ) {
    mail( $to, $subject, $txt, $headers );
}

header( "Location: index.html" );

?>