<?php
session_start();
$method=$_POST['Method'];
$method();


function unsetepisession()
{
    unset($_SESSION['epi']);
    //echo "<script>refreshDiv();</script>";
    echo "These data are removed, you need to calculate again!";
}
?>