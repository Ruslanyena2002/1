<?php
$subject = 'YENKARUSIK';
$firstName = "Hello.";
$to = 'ruslanena2002@gmail.com';

$message = "Hello my friend! \nLets play CS:GO 2";
echo $message;
$headers = "From: r.s.yena@student.khai.edu";
mail  ($to, $subject, $message, $headers);
?>