<?php

include("partials/config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function sendemail_verify($name, $email, $verify_token){
    $mail = new PHPMailer(true);
    //Enable SMTP debugging. 
    $mail->SMTPDebug = 3;      
    $mail->isSMTP();   
    $mail->SMTPAuth = true;                                         
    $mail->Host = 'smtp.gmail.com'; 
    $mail->Username = 'sproggaislam@gmail.com';                   
    $mail->Password = 'lvwkwukcvvedobqg';
    $mail->Mailer = "smtp";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
    $mail->Port       = 587; 
    $mail->SMTPAutoTLS = false;
    $mail->setFrom('sproggaislam@gmail.com', $name);
    $mail->addAddress($email); 
    $mail->isHTML(true);
    $mail->Subject = 'Verification mail from Progga ';
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //     'verify_peer' => false,
    //     'verify_peer_name' => false,
    //     'allow_self_signed' => true
    //     )
    //     );
    $email_template = "
        <h2>You have Registered with Progga</h2>
        <h5>Verify your email to Login with the link below</h5>
        <br>
        <a href = 'http://localhost/maternal_care/verify_email.php?token=$verify_token'> Click me </a>
    ";
    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent'
}


if(isset($_POST['register_btn'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token = md5(rand());
    
    // Email exists or not
    $check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['status'] = "Email already exists";
        header("Location: signup.php");

    }
    else{
        // Insert User Data
        $query = "INSERT INTO `users`(`name`, `phone`, `email`, `password`, `verify_token`) VALUES ('$name', '$phone', '$email', '$password','$verify_token' )";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            sendemail_verify("$name", "$email", "$verify_token");
            $_SESSION['status'] = "Registration Successful! Please Verify your Email.";
            header("Location: signup.php");
        }
        else{
            $_SESSION['status'] = "Registration Failed";
            header("Location: signup.php");
        }
    }
}

?>