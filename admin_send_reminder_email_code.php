<?php
require_once("./mailer/class.phpmailer.php");
    require_once("./mailer/class.smtp.php");

    function sendemail_reminder($name, $email, $rdate)
    {
        $mail = new PHPMailer();

        //$mail->SMTPDebug = 2;
        $mail->isSMTP();                                                    //Send using SMTP
        $mail->SMTPAuth   = true;                                           //Enable SMTP authentication

        $mail->Host       = 'smtp.gmail.com';                               //Set the SMTP server to send through
        $mail->Username   = 'ashrafulalamamit@gmail.com';                         //SMTP username
        $mail->Password   = 'tvhfvuadyytyuudl';                             //SMTP password

        $mail->SMTPSecure = 'tls';                                              //Enable implicit TLS encryption
        $mail->Port       = 587;                                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->setFrom('ashrafulalamamit@gmail.com', $name);
        $mail->addAddress($email);                                          //Name is optional

        $mail->isHTML(true);
        $mail->Subject = 'Reminder for Routine Visits';

        $email_template = "
        <h2>You have a visit on $rdate</h2>
        <h3>Please visit your doctor within tomorrow</h3>
        <hr>
        <h4><b>Stay Connected With MATERNAL CARE</b></h4>
        
    ";
        $mail->Body = $email_template;
        $mail->send();
    }

    ?>