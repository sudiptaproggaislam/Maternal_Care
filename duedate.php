<?php

$page_title = "Due Date Calculator";
include('partials/link.php');

include('partials/header.php');

?>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-expand-md" id="logo-nav" style='background-color: rgb(148, 203, 219,0.7) !important;'>
    <div class="container-fluid" id="logo">
        <br>
        <div class="welcome text-center">
            <div class="col-12">
                <h1 id="bwe" class="display-4">
                    <a class="navbar-brand" href="home.php">
                        <img src="images/logo.png" alt="" width="60" height="55" class="jumbotron-heading " class="d-inline-block align-text-top"><span id="txt"><b> MATERNAL CARE</b></span>
                    </a>
                </h1>
            </div>
        </div>
    </div>
</nav>

<?php
// include('insertcalculator.php');
if (!empty($_POST['calculator_ok'])) :

    //convert time to Unix timestamps
    $lasttime = strtotime($_POST['dates']);

    // next period start
    $next_period = $lasttime + $_POST['days'] * 24 * 3600;
    $next_period = date("F d, Y", $next_period);

    //first fertile day
    $firstdaytime = $lasttime + $_POST['days'] * 24 * 3600 - 16 * 24 * 3600;
    $firstday = date("F d, Y", $firstdaytime);

    //last fertile day
    $lastdaytime = $lasttime + $_POST['days'] * 24 * 3600 - 12 * 24 * 3600;
    $lastday = date("F d, Y", $lastdaytime);

    //have to adjust due date?
    $diff = $_POST['days'] - 28;

    //due date $date + 280 days
    $duedatetime = $lasttime + 280 * 24 * 3600 + $diff * 24 * 3600;
    $duedate = date("F d, Y", $duedatetime); ?>

    <div class="container calculator">
        <div class="row justify-content-center">
            <div class="row-md-6">
                <?php
                //output 
                echo '<br><br><h3>Here are the results based on the information you provided: </h3><br>';
                echo 'Last period :' . date("F d, Y", $lasttime) . '<br>Next period: ' . $next_period . '<br>First firtile day: ' . $firstday . '<br>Last firtile day: ' . $lastday . '<br>';
                echo 'Your estimated <b>due date</b> will be : ' . $duedate; ?>
            </div>
        </div>
<hr>
            <div class="row justify-content-center">
            <div class="row-md-6">
                <?php
                //visits to doctor
                //4 to 28 weeks--> One visit per month (every four weeks)
                $i_visit = date("F d, Y", $lasttime + 4 * 7 * 24 * 3600);
                $ii_visit = date("F d, Y", $lasttime + 8 * 7 * 24 * 3600);
                $iii_visit = date("F d, Y", $lasttime + 12 * 7 * 24 * 3600);
                $iv_visit = date("F d, Y", $lasttime + 16 * 7 * 24 * 3600);
                $v_visit = date("F d, Y", $lasttime + 20 * 7 * 24 * 3600);
                $vi_visit = date("F d, Y", $lasttime + 24 * 7 * 24 * 3600);
                $vii_visit = date("F d, Y", $lasttime + 28 * 7 * 24 * 3600);

                //28 to 36 weeks --> Two visits per month (every two to three weeks)
                $viii_visit = date("F d, Y", $lasttime + 30 * 7 * 24 * 3600);
                $ix_visit = date("F d, Y", $lasttime + 32 * 7 * 24 * 3600);
                $x_visit = date("F d, Y", $lasttime + 34 * 7 * 24 * 3600);
                $xi_visit = date("F d, Y", $lasttime + 36 * 7 * 24 * 3600);

                //36 weeks to delivery --> One visit per week
                $xii_visit = date("F d, Y", $lasttime + 37 * 7 * 24 * 3600);
                $xiii_visit = date("F d, Y", $lasttime + 38 * 7 * 24 * 3600);
                $xiv_visit = date("F d, Y", $lasttime + 39 * 7 * 24 * 3600);
                $xv_visit = date("F d, Y", $lasttime + 40 * 7 * 24 * 3600);

                echo "<h3>Recommended Schedule for a Healthy Pregnancy</h3>";
                echo "<p><b>For a healthy pregnancy, your doctor will probably want to see you on the following recommended schedule of prenatal visits:</b></p>";
                echo "<ul>
                <li>Weeks 4 to 28: 1 prenatal visit a month</li>
                <ul>
                    <li>1st visit date : $i_visit</li>
                    <li>2nd visit date : $ii_visit</li>
                    <li>3rd visit date : $iii_visit</li>
                    <li>4th visit date : $iv_visit</li>
                    <li>5th visit date : $v_visit</li>
                    <li>6th visit date : $vi_visit</li>
                    <li>7th visit date : $vii_visit</li>
                </ul>
                <li>Weeks 28 to 36: 1 prenatal visit every 2 weeks</li>
                <ul>
                <li>8th visit date : $viii_visit</li>
                <li>9th visit date : $ix_visit</li>
                <li>10th visit date : $x_visit</li>
                <li>11th visit date : $xi_visit</li>

                </ul>
                <li>Weeks 36 to 40: 1 prenatal visit every week</li>
                <ul>
                <li>12th visit date : $xii_visit</li>
                <li>13th visit date : $xiii_visit</li>
                <li>14h visit date : $xiv_visit</li>
                <li>15th visit date : $xv_visit</li>
                </ul>
            </ul>";

                ?>
                <p align="center"><input type="button" value="Calculate again!" onclick="window.location='http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['REQUEST_URI'] ?>'"></p>
            </div>
        </div>
    </div>
    <?php

    ?>



<?php else :
    //the calculator comes here
?>


    <div class="container calculator">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-header">
                    <h5>Due Date Calculator</h5>
                </div>
                <div class="container duedate">
                    <form action="duedate.php" method="POST">
                        <p>Select the first day of your last menstrual period: <input type="date" name="dates"></p>
                        <br>
                        <p>Usual number of days in your period: <select name="days">
                                <?php
                                for ($i = 20; $i <= 45; $i++) {
                                    if ($i == 28) $selected = 'selected="true"';
                                    else $selected = '';
                                    echo "<option $selected value='$i'>$i</option>";
                                }
                                ?>
                            </select></p>
                        <!-- <input type="submit" name="submit" class="datesubmit"><br> -->
                        <p align="center"><input type="submit" name="calculator_ok" value="Calculate"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php

?>