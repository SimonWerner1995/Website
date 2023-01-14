<?php
echo "<pre>";

    print_r($_POST);

    $userName = $_POST['name'];
    $userMail = $_POST['email'];
    $userMessage = $_POST['message'];

    $to = "simon.werner95@gmail.com";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userMail. "\r\n";
    $body .= "Message: ".$userMessage. "\r\n";

    mail($to,"Contact",$body)

echo "</pre>";
?>