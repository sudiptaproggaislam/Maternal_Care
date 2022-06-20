<?php

include("partials/config.php");

if(!isset($_SESSION['authenticated'])){

    $_SESSION['status'] = "Please login to access this page";
    header("Location: login.php");
    exit(0);
}
?> 