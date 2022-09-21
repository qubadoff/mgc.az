<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "siyaset007@gmail.com";

if (mail($to, $name, $email, $phone, $message))
{
    Success !
} else {
    Error !
}