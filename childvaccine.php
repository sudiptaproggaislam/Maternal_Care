<?php
include('partials/config.php');
$page_title = "Child Vaccination";
include('partials/link.php');
include('partials/header.php');


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
                            <form action="duedate.php" method="POST">
                                <div>
                                    <p>Select the birth date of your baby: <input type="date" name="dates"></p>
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
</div>