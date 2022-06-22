<?php
session_start();
$method=$_POST['Method'];
$method();

function getReminderBtn()
{
    $con= mysqli_connect("localhost","root","","maternal_care");

    $dateOfLMP = $_SESSION['dateOfLMP'];
    $name = $_SESSION['auth_user']['username'];
    $email = $_SESSION['auth_user']['email'];
    $lasttime = strtotime($dateOfLMP);
    $visits = array();
    unset($_SESSION['rm']);

    //visits to doctor
    //4 to 28 weeks--> One visit per month (every four weeks)
    for ($i = 4; $i < 29; $i = $i + 4) {
        array_push($visits,  date("y-m-d", $lasttime + $i * 7 * 24 * 3600));
    }

    //28 to 36 weeks --> Two visits per month (every two to three weeks)
    for ($i = 30; $i < 37; $i = $i + 2) {
        array_push($visits,  date("y-m-d", $lasttime + $i * 7 * 24 * 3600));
    }

    //36 weeks to delivery --> One visit per week
    for ($i = 37; $i < 41; $i++) {
        array_push($visits,  date("y-m-d", $lasttime + $i * 7 * 24 * 3600));
    }

    for ($i = 0; $i < 15; $i++) {
        $query = "INSERT INTO maternal_reminder(name,email,rdate) values('$name','$email','$visits[$i]')";
        $query_run = mysqli_query($con, $query);
    }
    //echo "<script>refreshDiv();</script>";
    // header('Location: maternal_reminder.php');
    // exit(0);
    echo "Uploaded Successfully";

}

function clearBtn()
{
    unset($_SESSION['rm']);
    //echo "<script>refreshDiv();</script>";
    echo "These data are removed, you need to calculate again!";
}
?>