<?php
$page_title = "Child Care";
include('partials/link.php');
include('partials/header.php');
include('authentication.php');
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-expand-md sticky-top" id="logo-nav" style="background-color: rgb(148, 203, 219,0.7) !important; " id="logonav">
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

<!-- Blog Carousel -->
<section>
    <div class="blog">
        <div class="container">
            <div class="owl-carousel owl-theme blog-post">
                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                    <img src="images/1.jpg" alt="post-1">
                    <div class="blog-title">
                        <h3>London Fashion week's continued the evolution</h3>
                        <button class="btn btn-blog">Fashion</button>
                    </div>
                </div>
                <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                    <img src="images/2.jpg" alt="post-1">
                    <div class="blog-title">
                        <h3>London Fashion week's continued the evolution</h3>
                        <button class="btn btn-blog">Fashion</button>
                    </div>
                </div>
                <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                    <img src="images/3.jpg" alt="post-1">
                    <div class="blog-title">
                        <h3>London Fashion week's continued the evolution</h3>
                        <button class="btn btn-blog">Fashion</button>
                    </div>
                </div>
                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                    <img src="images/1.jpg" alt="post-1">
                    <div class="blog-title">
                        <h3>London Fashion week's continued the evolution</h3>
                        <button class="btn btn-blog">Fashion</button>
                    </div>
                </div>
            </div>
            <div class="owl-navigation">
                <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
            </div>
        </div>
    </div>
</section>