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
    <div class="justify-content-center">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Status</th>
            </tr>

            <?php

            $find_dates_to_send_reminder = "SELECT * from maternal_reminder WHERE  rdate > CURRENT_TIMESTAMP";
            $find_dates_to_send_reminder_run = mysqli_query($con, $find_dates_to_send_reminder);

            while ($result = mysqli_fetch_array($find_dates_to_send_reminder_run)) {

                $uName = $result['name'];
                $uEmail = $result['email'];
                $uDate = $result['rdate'];
                $uStatus = $result['rstatus'];

                echo '<tr>';
                echo '<td>' . $uName . '</td>';
                echo '<td>' . $uEmail . '</td>';
                echo '<td>' . $uDate . '</td>';
                echo '<td>' . $uStatus . '</td>';

                echo '</tr>';
            }


            ?>
        </table>

        <div class="justify-content-center" align=center>
            <form method="POST">
                <div class="col-lg-6">
                    <input type="submit" name="adminSendRmBtn" id="adminSendRmBtn" value="Send Mail and SMS" class="btn btn-outline-info w-100"><br>
                                    <small class="font-rale text-primary">*sending sms is temporarily disabled</small>

                </div>
            </form>
        </div>
    </div>
</div>

<?php

include('partials/footer.php');
?>