<!-- <p><a href="https://www.duedatecalculator.org/" target="_blank"><img src="https://www.duedatecalculator.org/images/logo-sm.png" border="0" alt="calculate due date"/></a></p>
<iframe src="https://www.duedatecalculator.org/free-calculator/c2.php" frameborder="0" width="300px" height="270px" scrolling="no" ></iframe>
  <p>Powered by <a href="https://www.duedatecalculator.org/free-calculator/" target="_blank">
<font style="text-decoration: none">conception date calculator tool</font></a></p> -->



<?php
if (isset($_SESSION['authenticated'])) {

    $_SESSION['status'] = "You are already logged in";
    header("Location: home.php");
    exit(0);
}

include('partials/config.php');
$page_title = "Log in Form";
include('partials/link.php');
include('partials/header.php');
?>

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

<?php include("partials/navbar.php"); ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <div class="alert alert-success">
                        <h5><?= $_SESSION['status']; ?></h5>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card shadow">
                    <div class="card-header ">
                        <h5>Log in</h5>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="admincheckbox" value="Yes">
                                <label class="form-check-label" for="exampleCheck1">login as admin!</label>
                            </div>
                            <div class="form-group mb-3">
                                <a href="password-reset.php" class="float-end" id="teals">Forgot your password?</a>
                            </div>
                            <div class="form-group login-btn">
                                <button type="submit" name="login_btn" class="btn btn-primary" id="teal">LOG IN</button>
                            </div>
                        </form>
                        <hr>
                        <p>
                            Did not receive your verification email?
                            <a href="resend-email-verification.php" class="teal">Resend</a>
                        </p>
                        <div class="form-group mb-3">
                            <a href="signup.php" class="teal">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>