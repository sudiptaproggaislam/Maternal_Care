<?php
session_start();
$method = $_POST['Method'];
$method(); ?>

<?php
function sendEmailReminder()
{
    // include("admin_send_reminder_sms_code.php");
    // no api key
    include("admin_send_reminder_email_code.php");
    

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
        // sendsms_reminder($name, $phone, $rdate);
        // no api key

        $update_query = "UPDATE maternal_reminder SET rstatus=1 WHERE id='$uID' LIMIT 1";
        $update_query_run = mysqli_query($con, $update_query);
    }
    echo "Reminder has been sent successfully";
}
