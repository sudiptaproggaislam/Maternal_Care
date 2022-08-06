<?php
include("authentication.php");
?>

<div id="refresh_div">
    <?php
    // session_start();
    $page_title = "Due Date Calculator";
    include('partials/link.php');
    // include('partials/config.php');
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

    if (isset($_POST['submit'])) {
        if (isset($_SESSION['authenticated'])) {
            $_SESSION['dateOfLMP'] = $_POST['dates'];
            $_SESSION['periodCycle'] = $_POST['days'];
            $_SESSION['rm'] = TRUE;
        } else {
            $_SESSION['status'] = "Please login first";
            header("Location: login.php");
            exit(0);
        }
    }
    if (isset($_SESSION['rm'])) {
        $con = mysqli_connect("localhost", "root", "", "maternal_care");
        $visit = array();

        $dateOfLMP = $_SESSION['dateOfLMP'];
        $periodCycle = $_SESSION['periodCycle'];

        // $name = $_SESSION['auth_user']['username'];
        // $phone = $_SESSION['auth_user']['phone'];
        // $email = $_SESSION['auth_user']['email'];
        // $verify_token = $_SESSION['auth_user']['authID'];

        // convert date to Unix hex value
        $lasttime = strtotime($dateOfLMP);

        // next period start
        $next_period = $lasttime + $periodCycle * 24 * 3600;
        $next_period = date("F d, Y", $next_period);

        //first fertile day
        $firstdaytime = $lasttime + $periodCycle * 24 * 3600 - 16 * 24 * 3600;
        $firstday = date("F d, Y", $firstdaytime);

        //last fertile day
        $lastdaytime = $lasttime + $periodCycle * 24 * 3600 - 12 * 24 * 3600;
        $lastday = date("F d, Y", $lastdaytime);

        //have to adjust due date?
        $diff = $periodCycle - 28;

        //due date $date + 280 days
        $duedatetime = $lasttime + 280 * 24 * 3600 + $diff * 24 * 3600;
        $duedate = date("F d, Y", $duedatetime);
        //visits to doctor
        //4 to 28 weeks--> One visit per month (every four weeks)
        for ($i = 4; $i < 29; $i = $i + 4) {
            array_push($visit,  date("y-m-d", $lasttime + $i * 7 * 24 * 3600));
        }

        //28 to 36 weeks --> Two visits per month (every two to three weeks)
        for ($i = 30; $i < 37; $i = $i + 2) {
            array_push($visit,  date("y-m-d", $lasttime + $i * 7 * 24 * 3600));
        }

        //36 weeks to delivery --> One visit per week
        for ($i = 37; $i < 41; $i++) {
            array_push($visit,  date("y-m-d", $lasttime + $i * 7 * 24 * 3600));
        }
    ?>

        <div class="calculator2">
            <div class="row justify-content-center">
                <div class="row-md-6">
                    <?php
                    //output 
                    echo '<h4><p>Here are the results based on the information you provided: </p></h4>'; ?>
                    <div class="name">
                        <?php
                        echo 'Last period :' . date("F d, Y", $lasttime) . '<br>Next period: ' . $next_period . '<br>First firtile day: ' . $firstday . '<br>Last firtile day: ' . $lastday . '<br>';
                        echo 'Your estimated <b>due date</b> will be : ' . $duedate . '</p>'; ?></div>
                    <hr>

                    <?php
                    echo "<h4><p>Recommended Schedule for a Healthy Pregnancy</p></h4>";
                    echo "<p>For a healthy pregnancy, your doctor will probably want to see you on the following recommended schedule of prenatal visits:</p>";
                    echo "<ul>
                <li>Weeks 4 to 28: 1 prenatal visit a month</li>
                <ul>
                    <li>1st visit date : $visit[0]</li>
                    <li>2nd visit date : $visit[1]</li>
                    <li>3rd visit date : $visit[2]</li>
                    <li>4th visit date : $visit[3]</li>
                    <li>5th visit date : $visit[4]</li>
                    <li>6th visit date : $visit[5]</li>
                    <li>7th visit date : $visit[6]</li>    
                </ul>
                <li>Weeks 28 to 36: 1 prenatal visit every 2 weeks</li>
                <ul>
                    <li>8th visit date : $visit[7]</li>
                    <li>9th visit date : $visit[8]</li>
                    <li>10th visit date : $visit[9]</li>
                    <li>11th visit date : $visit[10]</li>
                
                </ul>
                <li>Weeks 36 to 40: 1 prenatal visit every week</li>
                <ul>
                    <li>12th visit date : $visit[11]</li>
                    <li>13th visit date : $visit[12]</li>
                    <li>14h visit date : $visit[13]</li>
                    <li>15th visit date : $visit[14]</li>
                </ul>
                
            </ul>";
                    // for ($i = 0; $i < 15; $i++) {
                    //     $query = "INSERT INTO reminders(rdate) values('$visit[$i]')";
                    //     $query_run = mysqli_query($con, $query);
                    //   }
                    ?>
                    <div class="ml-auto justify-content-center">
                        <form>
                            <div class="row d-flex">
                                <div class="col-lg-6">
                                    <input type="submit" name="unset" id="unset" value="Calculate Again" class="btn btn-outline-info w-100">
                                </div>
                                <div class="col-lg-6">
                                    <input type="submit" name="reminderbtn" id="reminderbtn" value="Get Reminder" class="btn btn-outline-info w-100">
                                    <small class="font-rale text-primary">*will send mail one day before visit</small><br>
                                    <small class="font-rale text-danger">*will overwrite all the previous dates and datas</small>
                                </div>

                            </div>
                            <!-- <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <input type="submit" name="clearhistorybtn" id="clearhistorybtn" value="Clear Previous Dates" class="btn btn-outline-info w-100">
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php

    } else {
    ?>

        <div class="calculator1">
            <div class="row justify-content-center">
                <div class="col-md-6 round">
                    <div class="name">
                        <div class="card shadow">
                            <div class="card-header ">
                                <h4 class="name">Due Date Calculator</h5>
                                    <p>See when your baby is due!</p>
                            </div>
                            <div class="card-body">
                                <div class="duedate">
                                    <form action="duedate.php" method="POST">
                                        <div>
                                            <p>Select the first day of your last menstrual period: <input type="date" name="dates"></p>
                                        </div>
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
                                        <p align="center"><input type="submit" name="submit" value="Calculate" id="calculate_btn" class="btn btn-primary"></p>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
        // endif;
    }

    ?>
</div>

<script type="text/javascript">
    function refreshDiv() {
        $('#refresh_div').load(location.href + ' #refresh_div');
        //alert("hello");

        //   $('#refresh-div').remove();
    }
</script>