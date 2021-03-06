<?php
session_start();
$method = $_POST['Method'];
$method();?>

<?php
function sendEmailReminder()
{
    
require_once("./mailer/class.phpmailer.php");
require_once("./mailer/class.smtp.php");

function sendemail_reminder($name, $email, $rdate)
{
    $mail = new PHPMailer();

    //$mail->SMTPDebug = 2;
    $mail->isSMTP();                                                    //Send using SMTP
    $mail->SMTPAuth   = true;                                           //Enable SMTP authentication

    $mail->Host       = 'smtp.gmail.com';                               //Set the SMTP server to send through
    $mail->Username   = 'workmailprogga@gmail.com';                         //SMTP username
    $mail->Password   = 'qqdkjhegjelambon';                             //SMTP password

    $mail->SMTPSecure = 'tls';                                              //Enable implicit TLS encryption
    $mail->Port       = 587;                                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom('workmailprogga@gmail.com', $name);
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

    $con = mysqli_connect("localhost", "root", "", "maternal_care");

    // code
    $send_reminder_to = "SELECT * from maternal_reminder WHERE  CURRENT_TIMESTAMP > DATE_SUB(rdate , interval 1 day)  and rstatus = 0";
    $send_reminder_to_run = mysqli_query($con, $send_reminder_to);


    while ($res = mysqli_fetch_array($send_reminder_to_run)) {

        $uName = $res['name'];
        $uEmail = $res['email'];
        $uDate = $res['rdate'];
        $uStatus = $res['rstatus'];
        $uID = $res['id'];

        sendemail_reminder($uName, $uEmail, $uDate);
        $update_query = "UPDATE maternal_reminder SET rstatus=1 WHERE id='$uID' LIMIT 1";
        $update_query_run = mysqli_query($con, $update_query);
    }
    echo "Reminder has been sent successfully";
}
