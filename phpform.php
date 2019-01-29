<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['btn_submit'])) {
    $comapny_name = $_POST['comapny_name'] != '' ? $_POST['comapny_name'] : '/';
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = "login-155.hoststar.ch"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 465; // TLS only
    $mail->SMTPSecure = 'ssl'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = 'phpmailer@mancoimmoservice.ch';
    $mail->Password = 'j@j58F8M';
    $mail->setFrom($email, $full_name);
    $mail->addAddress('info@mancoimmoservice.ch');
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message . "<br><hr>Company Name: {$comapny_name}<br>First & Last Name: {$full_name}<br>Phone: {$phone}<br>";
    // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    // Read an HTML message body from an external file, convert referenced images to embedded,
    // $mail->AltBody = 'HTML messaging not supported';
    // $mail->addAttachment('images/phpmailer_mini.png');
    // Attach an image file

    session_start();
    if(!$mail->send()){
        $_SESSION['error'] = 'Something went wrong!';
        header('Location: /#kontakt'); // this is different on localhost
    }else{
        $_SESSION['success'] = 'You successfuly sent a message!';
        header('Location: /#kontakt'); // this is different on localhost
    }
} else {
    die('Send valid data through form!');
}
