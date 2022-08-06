<?php
include("authentication.php");
?>
<?php
// session_start();
// if (!isset($_SESSION['authenticated'])) {
//     $_SESSION['status'] = "Please login to access this page";
//     header("Location: login.php");
//     exit(0);
// }
$page_title = "Reminder for Visits";
include('partials/link.php');
include('partials/header.php');
?>

<?php
$con = mysqli_connect("localhost", "root", "", "maternal_care");
$name = $_SESSION['auth_user']['username'];
$email = $_SESSION['auth_user']['email'];
$rdate = array();
$rstatus = array();

$purse_query = "SELECT * FROM maternal_reminder WHERE email='$email'";
$purse_query_run = mysqli_query($con, $purse_query);
$i = 0;

if(mysqli_num_rows($purse_query_run) > 0){

while ($result = mysqli_fetch_array($purse_query_run)) {
    $rdate[$i] = $result['rdate'];
    $rstatus[$i] = $result['rstatus'];

    $i++;
}
}
else{
    $_SESSION['status'] = "Please upload your information";
    header("Location: home.php");
    exit(0);
}
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

<main role="main">

    <section class="jumbotron text-center" id="#jumbotron">
        <div class="container">
            <h2 class="jumbotron-heading">Reminder for Visits</h2>
            <p class="lead text-muted">Maintain your Visits for a Healthy Pregnancy.</p>
            <hr>
            <h3 style="color: #404470d9; font-family: cursive;">Hey <?php echo $name; ?>!! Here are the Dates of your Visits</h3>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h4 class="featurette-heading">1st Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[0]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[0]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">2nd Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[1]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[1]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">3rd Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[2]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[2]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">4th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[3]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[3]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">5th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[4]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[4]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">6th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[5]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[5]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">7th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[6]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[6]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">8th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[7]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[7]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">9th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[8]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[8]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">10th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[9]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[9]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">11th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[10]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[10]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">12th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[11]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[11]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">13th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[12]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[12]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">14th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[13]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[13]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">

                            <h4 class="featurette-heading">15th Visit Date:</h4>
                            <hr>
                            <p class="card-text"><?php echo $rdate[14]; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $rstatus[14]; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<?php include("partials/footer.php"); ?>