<?php
session_start();
$page_title = "Dashboard";
include('partials/link.php');
include('partials/header.php');
date_default_timezone_set("Asia/Dhaka");
$con = mysqli_connect("localhost", "root", "", "maternal_care");

?>

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
                    <input type="submit" name="adminSendRmBtn" id="adminSendRmBtn" value="Reminder" class="btn btn-outline-info w-100">
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include('partials/footer.php');
?>