<?php
include('partials/config.php');
include('partials/header.php');
$page_title = "Reset your Password";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function resend_email_verify($name, $email, $verify_token){

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
    $mail->Subject = 'Resend - Verification mail from Progga ';
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


if(isset($_POST['resend_email_btn'])){
    
    if(!empty(trim($_POST['email']))){

        $email = mysqli_real_escape_string($con, $_POST['email']);

        $check_email_query = "SELECT * FROM users WHERE email ='$email' LIMIT 1";
        $check_email_query_run = mysqli_query($con, $check_email_query);

        if(mysqli_num_rows($check_email_query_run) > 0){

            $row = mysqli_fetch_array($check_email_query_run);
            if($row['verify_status'] == '0'){
                
                $name = $row['name'];
                $email = $row['email'];
                $verify_token = $row['verify_token'];
                
                resend_email_verify($name, $email, $verify_token);
                $_SESSION['status'] = "Verfication email link has been sent to yout email address.";
                header("Location: login.php");
                exit(0);

            }
            else{
                $_SESSION['status'] = "Email is already verified. Please login now.";
                header("Location: resend-email-verification.php");
                exit(0);
            }

        }
        else{
            $_SESSION['status'] = "Email is not registered. Please register now.";
            header("Location: register.php");
            exit(0);
        }   
    }
    else{
        $_SESSION['status'] = "Please enter the email field";
        header("Location: resend-email-verification.php");
        exit(0);
    }
}

?>