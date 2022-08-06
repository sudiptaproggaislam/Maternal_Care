<?php
$page_title = "Child Vaccination";
include('partials/link.php');
include('partials/header.php');
include("authentication.php");
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-expand-md " id="logo-nav" style="background-color: rgb(148, 203, 219,0.7) !important; " id="logonav">
    <div class="container-fluid" id="logo">
        <br>
        <div class="welcome text-center">
            <div class="col-12">
                <h1 id="bwe" class="display-4"><a class="navbar-brand" href="home.php">
                        <img src="images/logo.png" alt="" width="60" height="55" class="jumbotron-heading " class="d-inline-block align-text-top"><span id="txt"><b> MATERNAL CARE</b></span>
                    </a></h1>
            </div>
        </div>
    </div>
</nav>
<?php include("partials/navbar.php"); ?>
<!-- navigation ends -->
<?php
if (isset($_POST['submit'])) {
        $_SESSION['dob'] = $_POST['birthdate'];
        $_SESSION['epi'] = TRUE;
    }
    if (isset($_SESSION['epi'])) {
        $con= mysqli_connect("localhost","root","","maternal_care");
        $visit = array();

        $dob = $_SESSION['dob'];

        // convert date to Unix hex value
        $hdob = strtotime($dob);

        $p1=$hdob+6*7*24*3600;
        $p1 = date("F d, Y", $p1);
        $p2=$hdob+10*7*24*3600;
        $p2 = date("F d, Y", $p2);
        $p3=$hdob+14*7*24*3600;
        $p3 = date("F d, Y", $p3);
        $mr=$hdob+9*7*24*3600;
        $mr = date("F d, Y", $mr);
        $measles=$hdob+15*7*24*3600;
        $measles = date("F d, Y", $measles);


    ?>

        <div class="epicalculator">
            <div class="row justify-content-center">
                <div class="row-md-6 round">
                <div class="container1 card shadow">
                <table class="table table-borderless">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">Vaccine</th>
                            <th scope="col">Disease</th>
                            <th scope="col">No. of Doses</th>
                            <th scope="col">Interval between doses</th>
                            <th scope="col">Starting time of doses</th>
                            <th scope="col">Route of Administration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BCG</td>
                            <td>Tuberculosis</td>
                            <td>1</td>
                            <td>-</td>
                            <td>After birth/ If not possible with Penta 1</td>
                            <td>Intra dermal</td>
                        </tr>
                        <tr>
                            <td>Pentavalent</td>
                            <td>Diphtheria,<br> Pertussis,<br> Tetanus,<br> Hepatitis B,<br> Haemophilus Influenza B</td>
                            <td>3</td>
                            <td>4 weeks</td>
                            <td><?php echo "Penta1: $p1<br>Penta2: $p2<br>Penta3: $p3"?></td>
                            <td>IM</td>
                        </tr>
                        <tr>
                            <td>PCV</td>
                            <td>Tuberculosis</td>
                            <td>3</td>
                            <td>4 weeks</td>
                            <td><?php echo "PCV1: $p1<br>PCV2: $p2<br>PCV3: $p3"?></td>
                            <td>IM</td>
                        </tr>
                        <tr>
                            <td>OPV</td>
                            <td>Tuberculosis</td>
                            <td>4</td>
                            <td>4 weeks</td>
                            <td><?php echo "OPV0: Soon After Birth<br>OPV1: $p1<br>OPV2: $p2<br>OPV3: $p3"?></td>
                            <td>Oral</td>
                        </tr>
                        <tr>
                            <td>MR</td>
                            <td>Tuberculosis</td>
                            <td>1</td>
                            <td>-</td>
                            <td><?php echo "After :<br>$mr"?></td>
                            <td>Subcutaneous</td>
                        </tr>
                        <tr>
                            <td>Measles</td>
                            <td>Tuberculosis</td>
                            <td>1</td>
                            <td>-</td>
                            <td><?php echo "After :<br>$measles"?></td>
                            <td>Subcutaneous</td>
                        </tr>

                    </tbody>
                </table>
            </div>
                    <div class="ml-auto justify-content-center">
                        <form method="POST">
                            <div class="row d-flex">
                                <div class="col-lg-6 m-auto justify-content-center">
                                    <input type="submit" name="unsetepi" id="unsetepi" value="Calculate Again" class="btn btn-outline-info w-100">
                                </div>
                                <!-- <div class="col-lg-6">
                                    <input type="submit" name="reminderbtn" id="reminderbtn" value="Get Reminder" class="btn btn-outline-info w-100">
                                    <small class="font-rale text-primary">*will send mail one day before visit</small>
                                </div> -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?php
        
    } else {
        ?>

<div>
    <div class="row justify-content-center">
        <div class="col-md-6 round">
            
            <!-- calculator -->
            <div class="name">
                <div class="card shadow">
                    <div class="card-header ">
                        <h4 class="name">Child Vaccination Calculator</h5>
                            <p>Find out when your child has to be vaccinated!</p>
                    </div>
                    <div class="card-body">
                        <div class="duedate">
                            <form action="childvaccine.php" method="POST">
                                <div>
                                    <p>Select the birth date of your baby: <input type="date" name="birthdate"></p>
                                </div>
                                <br>
                                <!-- <input type="submit" name="submit" class="datesubmit"><br> -->
                                <p align="center"><input type="submit" name="submit" value="Calculate" id="calculate_btn" class="btn btn-primary"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!--Table-->
            <div class="container1 card shadow">
                <table class="table table-borderless">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">Vaccine</th>
                            <th scope="col">Disease</th>
                            <th scope="col">No. of Doses</th>
                            <th scope="col">Interval between doses</th>
                            <th scope="col">Starting time of doses</th>
                            <th scope="col">Route of Administration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BCG</td>
                            <td>Tuberculosis</td>
                            <td>1</td>
                            <td>-</td>
                            <td>After birth/ If not possible with Penta 1</td>
                            <td>Intra dermal</td>
                        </tr>
                        <tr>
                            <td>Pentavalent</td>
                            <td>Diphtheria, Pertussis, Tetanus, Hepatitis B, Haemophilus Influenza B</td>
                            <td>3</td>
                            <td>4 weeks</td>
                            <td>6 weeks of age</td>
                            <td>IM</td>
                        </tr>
                        <tr>
                            <td>PCV</td>
                            <td>Tuberculosis</td>
                            <td>3</td>
                            <td>4 weeks</td>
                            <td>6 weeks of age</td>
                            <td>IM</td>
                        </tr>
                        <tr>
                            <td>OPV</td>
                            <td>Tuberculosis</td>
                            <td>4</td>
                            <td>4 weeks</td>
                            <td>6 weeks of age</td>
                            <td>Oral</td>
                        </tr>
                        <tr>
                            <td>MR</td>
                            <td>Tuberculosis</td>
                            <td>1</td>
                            <td>-</td>
                            <td>After completion of 9 months</td>
                            <td>Subcutaneous</td>
                        </tr>
                        <tr>
                            <td>Measles</td>
                            <td>Tuberculosis</td>
                            <td>1</td>
                            <td>-</td>
                            <td>After completion of 15 months</td>
                            <td>Subcutaneous</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
        // endif;
    }

    ?>
</div>