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
        <h2 class="mb-3 justify-content-center">User Control Panel</h2>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Approve</th>
                <th>Block</th>
            </tr>

            <?php

            $query_users= "SELECT * from users";
            $queryusers_run = mysqli_query($con, $query_users);

            while ($run = mysqli_fetch_array($queryusers_run)) {

                $uName = $run['name'];
                $uEmail = $run['email'];
                $uToken= $run['verify_token'];
                $uStatus = $run['approval_status'];
                $stringStatusUser="Approved";

                if($uEmail != "1803070@student.ruet.ac.bd"){
                    if($uStatus==0){
                        $stringStatusUser="Blocked";
                    }
    
                    echo '<tr>';
                    echo '<td>' . $uName . '</td>';
                    echo '<td>' . $uEmail . '</td>';
                    echo '<td>' . $stringStatusUser . '</td>';
                    echo "<form action='users_control_panel.php' method='post'><td><button name='approveusers' style='margin:0px;border:none;' value='$uToken'><p style='color:#5ead62;'>Approve</p></button></td>";
                    echo "<td><button name='blockusers' style='margin:0px;border:none;' value='$uToken'><p style='color:red;'>Block</p></button></td></form>";
    
                    echo '</tr>';
                }
                
            }


            ?>
        </table>
    </div>
</div>
<?php

if (isset($_POST['blockusers'])) {
    $usertoken = $_POST['blockusers'];

        $block_query = "UPDATE users SET approval_status='0' WHERE verify_token='$usertoken';";
        $block_query_run = mysqli_query($con, $block_query);

        if ($block_query_run) {
            echo "<script> window.location.href='users_control_panel.php'; </script>";
        } else {
            echo "<script> window.location.href='users_control_panel.php'; </script>";
        }
}

if (isset($_POST['approveusers'])) {
    $usertoken = $_POST['approveusers'];

        $approve_query = "UPDATE users SET approval_status='1' WHERE verify_token='$usertoken';";
        $approve_query_run = mysqli_query($con, $approve_query);

        if ($approve_query_run) {
            echo "<script> window.location.href='users_control_panel.php'; </script>";
        } else {
            echo "<script> window.location.href='users_control_panel.php'; </script>";
        }
}

include('partials/footer.php');
?>