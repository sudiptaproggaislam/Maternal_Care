<?php
session_start();
$page_title = "Dashboard";
include('partials/link.php');
include('partials/header.php');
date_default_timezone_set("Asia/Dhaka");
$con = mysqli_connect("localhost", "root", "", "maternal_care");
if(!isset($_SESSION['authenticated'])){

    $_SESSION['status'] = "Please login to access this page";
    header("Location: login.php");
    exit(0);
}
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-expand-md " id="logo-nav" style="background-color: rgb(148, 203, 219,0.7) !important; " id="logonav">
    <div class="container-fluid" id="logo">
      <br>
      <div class="welcome text-center">
        <div class="col-12">
          <h1 id="bwe" class="display-4"><a class="navbar-brand" href="adminhomepage.php">
              <img src="images/logo.png" alt="" width="60" height="55" class="jumbotron-heading " class="d-inline-block align-text-top"><span id="txt"><b> MATERNAL CARE</b></span>
            </a></h1>
        </div>
      </div>
    </div>
  </nav>
  <?php
  include("partials/navbar-admin.php");
  ?>
  <br>
<div class="container mb-5" id="refresh-div">
    <div class="justify-content-center text-center">
        <h2 class="mb-3 justify-content-center">Admin Control Panel</h2>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Approve</th>
                <th>Block</th>
            </tr>

            <?php

            $query_admins = "SELECT * from admins";
            $query_admins_run = mysqli_query($con, $query_admins);

            while ($result = mysqli_fetch_array($query_admins_run)) {

                $aName = $result['name'];
                $aEmail = $result['email'];
                $aToken= $result['verify_token'];
                $aStatus = $result['approval_status'];
                $stringStatus="Approved";

                if($aEmail != "1803070@student.ruet.ac.bd"){
                    if($aStatus==0){
                        $stringStatus="Blocked";
                    }
    
                    echo '<tr>';
                    echo '<td>' . $aName . '</td>';
                    echo '<td>' . $aEmail . '</td>';
                    echo '<td>' . $stringStatus . '</td>';
                    echo "<form action='admin_control_panel.php' method='post'><td><button name='approve' style='margin:0px;border:none;' value='$aToken'><p style='color:#5ead62;'>Approve</p></button></td>";
                    echo "<td><button name='block' style='margin:0px;border:none;' value='$aToken'><p style='color:red;'>Block</p></button></td></form>";
    
                    echo '</tr>';
                }
                
            }


            ?>
        </table>
    </div>
</div>
<br><br><br><br><br>
<?php

if (isset($_POST['block'])) {
    $admintoken = $_POST['block'];

        $block_query = "UPDATE admins SET approval_status='0' WHERE verify_token='$admintoken';";
        $block_query_run = mysqli_query($con, $block_query);

        if ($block_query_run) {
            echo "<script> window.location.href='admin_control_panel.php'; </script>";
        } else {
            echo "<script> window.location.href='admin_control_panel.php'; </script>";
        }
}

if (isset($_POST['approve'])) {
    $admintoken = $_POST['approve'];

        $approve_query = "UPDATE admins SET approval_status='1' WHERE verify_token='$admintoken';";
        $approve_query_run = mysqli_query($con, $approve_query);

        if ($approve_query_run) {
            echo "<script> window.location.href='admin_control_panel.php'; </script>";
        } else {
            echo "<script> window.location.href='admin_control_panel.php'; </script>";
        }
}

include('partials/footer.php');
?>