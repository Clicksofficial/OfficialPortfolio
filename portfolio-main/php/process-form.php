<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'clicks.coofficial@gmail.com';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    $headers = "From: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "<script>alert('Your message has been sent.')</script>";
    }else{
        echo "<script>alert('Something went wrong. Please try again.')</script>";
    }
}
?>