<?php
session_start();
$method = $_POST['Method'];
$method();

function getReminderBtn()
{
    // if ($_SESSION['auth_user']['duedate'] > 0) {
    //     echo "You have already uploaded your due dates, please clear first.";
    // } else {
        clearhistoryfunc();
        $con = mysqli_connect("localhost", "root", "", "maternal_care");

        $dateOfLMP = $_SESSION['dateOfLMP'];
        $name = $_SESSION['auth_user']['username'];
        $email = $_SESSION['auth_user']['email'];
        $verifytoken = $_SESSION['auth_user']['token'];
        $lasttime = strtotime($dateOfLMP);
        $visits = array();
        

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

        $setduedate = "UPDATE users SET due_date='$lasttime' where verify_token='$verifytoken'";
        $setduedate_run = mysqli_query($con, $setduedate);
        //echo "<script>refreshDiv();</script>";
        // header('Location: maternal_reminder.php');
        // exit(0);
        if ($setduedate_run) {
            $_SESSION['auth_user']['duedate']=$lasttime;
            unset($_SESSION['rm']);
            echo "\nNew Datas Uploaded Successfully";
        }
    // }
}

function clearhistoryfunc()
{
    $conn = mysqli_connect("localhost", "root", "", "maternal_care");
    $verifytoken = $_SESSION['auth_user']['token'];
    $email = $_SESSION['auth_user']['email'];
    $lasttime = 0;

    $rmvdate = "UPDATE users SET due_date='$lasttime' where verify_token='$verifytoken'";
    $rmvdate_run = mysqli_query($conn, $rmvdate);

    $rmvalldate = "DELETE FROM maternal_reminder WHERE email='$email'";
    $rmvalldate_run = mysqli_query($conn, $rmvalldate);

    if ($rmvalldate_run) {
        $_SESSION['auth_user']['duedate']=0;
        unset($_SESSION['rm']);
        echo "Perious datas removed successfully.";
    }
}

function clearBtn()
{
    unset($_SESSION['rm']);
    echo "These data are removed, you need to calculate again!";
}
