<?php
    include('partials/config.php');
    include('partials/header.php');
    $page_title = "Reset your Password";

if(isset($_GET['token'])){
// users
    $token = $_GET['token'];
    $verify_query = "SELECT verify_token,verify_status FROM users WHERE verify_token = '$token' LIMIT 1";
    $verify_query_run = mysqli_query($con, $verify_query);
// admins
    $tokenadmin = $_GET['token'];
    $verify_query_admin = "SELECT verify_token,verify_status FROM admins WHERE verify_token = '$token' LIMIT 1";
    $verify_query_admin_run = mysqli_query($con, $verify_query_admin);

    ///user login
    if(mysqli_num_rows($verify_query_run) > 0){

        $row = mysqli_fetch_array($verify_query_run);
        
        if($row['verify_status'] == "0"){

            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE users SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($con, $update_query);

            if($update_query_run){
                $_SESSION['status'] = "Your account has been verified successfully.";
                header("Location: login.php");
                exit(0);
            }
            else{
                $_SESSION['status'] = "Verification failed.";
                header("Location: login.php");
                exit(0);
            }

        }
        else{
            $_SESSION['status'] = "Email already verified. Please Login.";
            header("Location: login.php");
            exit(0);
        }

    }
    
    ///admin login
    elseif(mysqli_num_rows($verify_query_admin_run) > 0){
        $row = mysqli_fetch_array($verify_query_admin_run);
        
        if($row['verify_status'] == "0"){

            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE admins SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($con, $update_query);

            if($update_query_run){
                $_SESSION['status'] = "Your account has been verified successfully.";
                header("Location: login.php");
                exit(0);
            }
            else{
                $_SESSION['status'] = "Verification failed.";
                header("Location: login.php");
                exit(0);
            }

        }
        else{
            $_SESSION['status'] = "Email already verified. Please Login.";
            header("Location: login.php");
            exit(0);
        }
    }
    else{
        $_SESSION['status'] = "This token does not exist";
        header("Location: login.php");
    }

}
else{
    $_SESSION['status'] = "Not Allowd";
    header("Location: login.php");
}
?>