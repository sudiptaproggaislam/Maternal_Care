<?php
    include('partials/config.php');
    $page_title = "Sign up Form";
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
<?php 
    include('partials/navbar.php'); ?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if(isset($_SESSION['status']))
                {
                ?>
                <div class="alert alert-success">
                    <h5><?= $_SESSION['status']; ?></h5>
                </div>
                <?php
                unset($_SESSION['status']);
                }
                ?>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Sign up</h5>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <!-- <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password" class="form-control">
                            </div> -->
                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-secondary btn-signup">SIGN UP</button>
                            </div>
                            <hr>
                            <div class="form-group">
                            <p>
                            Already have an account?
                            <a href="login.php" class="login_text">Log in now</a>
                            </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>