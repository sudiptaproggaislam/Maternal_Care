<?php
include("partials/config.php");
include("partials/header.php");

if (isset($_POST['login_btn'])) {

    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {
        if (isset($_POST['admincheckbox']) && $_POST['admincheckbox'] == 'Yes') {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            $login_query = "SELECT * FROM admins WHERE email='$email' AND password='$password' LIMIT 1";
            $login_query_run = mysqli_query($con, $login_query);

            if (mysqli_num_rows($login_query_run) > 0) {

                $row = mysqli_fetch_array($login_query_run);

                if ($row['verify_status'] == '1') {
                    if ($row['approval_status'] == '1') {

                        $_SESSION['authenticated'] = TRUE;
                        $_SESSION['auth_user'] = [
                            'username' => $row['name'],
                            'phone' => $row['phone'],
                            'email' => $row['email'],
                            'token' => $row['verify_token'],
                            'user_id' => $row['id']

                        ];
                        // $_SESSION['status'] = "You are logged in successfully";
                        header("Location: adminhomepage.php");
                        exit(0);
                    } else {
                        $_SESSION['status'] = "Contact admin for approval";
                        header("Location: login.php");
                        exit(0);
                    }
                } else {
                    $_SESSION['status'] = "Please verify your email address to login";
                    header("Location: login.php");
                    exit(0);
                }
            } else {
                $_SESSION['status'] = "Invalid email or password";
                header("Location: login.php");
                exit(0);
            }
        } else {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
            $login_query_run = mysqli_query($con, $login_query);

            if (mysqli_num_rows($login_query_run) > 0) {

                $row = mysqli_fetch_array($login_query_run);

                if ($row['verify_status'] == '1') {
                    if ($row['approval_status'] == '1') {
                    $_SESSION['authenticated'] = TRUE;
                    $_SESSION['auth_user'] = [
                        'username' => $row['name'],
                        'phone' => $row['phone'],
                        'email' => $row['email'],
                        'token' => $row['verify_token'],
                        'duedate' => $row['due_date'],
                        'user_id' => $row['id']

                    ];
                    // $_SESSION['status'] = "You are logged in successfully";
                    header("Location: home.php");
                    exit(0);
                } else {
                    $_SESSION['status'] = "Your are temporarily blocked by admin";
                    header("Location: login.php");
                    exit(0);
                }
                } else {
                    $_SESSION['status'] = "Please verify your email address to login";
                    header("Location: login.php");
                    exit(0);
                }
            } else {
                $_SESSION['status'] = "Invalid email or password";
                header("Location: login.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['status'] = "All fields are mandatory";
        header("Location: login.php");
        exit(0);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
}
