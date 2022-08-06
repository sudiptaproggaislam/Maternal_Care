<?php
// include("authentication.php");
include('partials/config.php');
$page_title = "Maternal Care";
include('partials/link.php');
include('partials/header.php');
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
<?php include("partials/navbar-admin.php"); ?>
<!-- navigation ends -->

<!--- Seperator -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-5">Welcome <span style="color: teal;">Admin</span></h1>
        </div>
    </div>
    <hr>
</div>

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <a class="card-block stretched-link text-decoration-none" href="admin_due_date_view.php">
                <!--LINK-->
                <div class="card card-img">
                    <img src="images/sendNotifications.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Send Notifications</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a class="card-block stretched-link text-decoration-none" href="createpost_admin.php">
                <div class="card card-img">
                    <img src="images/postBlog.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Post Blogs</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a class="card-block stretched-link text-decoration-none" href="query_page_admin.php">
                <div class="card card-img">
                    <img src="images/ansQueries.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Answer Query</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!--- Connect -->
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">

      <hr class="light-100">
      <h2>Connect</h2>

    </div>
    <div class="col-12 social padding">
      <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
      <a href="https://www.google.com"><i class="fab fa-google-plus-g"></i></a>
      <a href="https://www.instgram.com"><i class="fab fa-instagram"></i></a>
      <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</div>

<?php include("partials/footer.php"); ?>