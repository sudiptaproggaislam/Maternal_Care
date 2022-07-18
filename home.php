<?php include('partials/config.php');
$page_title = "Maternal Care";
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

<!--Carousel-->
<div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

        <h1><a href="pregnancy.php">Pregnancy Week by Week</a></h1>
        <h3>Pregnancy is an adventure! </h3>
        <h3>Let us help you—find pregnancy week-by-week info on baby's development,
          pregnancy symptoms week-by-week.</h3>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Eat Healthy During Pregnancy</h2>
        <h4>Making smart food choices can help you have a healthy pregnancy and a healthy baby.</h4>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Newborn Care</h1>
        <h3>Learn how to care for your newborn and find out what to do if your baby has colic, jaundice, or an umbilical hernia.</h3>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Vaccines for Your Children</h2>
        <h4>Find out which vaccines your child needs from birth through the teen years for protection against serious diseases.</h4>
      </div>
    </div>
  </div>
</div>

<!--- Seperator -->
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-5">Pregnancy, Birth and Baby</h1>
    </div>
  </div>
  <hr>
</div>

<!--- Cards -->
<div class="container-fluid padding">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <a class="card-block stretched-link text-decoration-none" href="duedate.php">
        <div class="card card-img">
          <img src="images/duedate.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Due Date Calculator</h5>
            <p class="card-text">When is your baby due? Use this pregnancy calculator to find your due date based on the date of your last menstrual period.</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a class="card-block stretched-link text-decoration-none" href="maternal_reminder.php">
        <div class="card card-img">
          <img src="images/visit.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Reminder for visits</h5>
            <p class="card-text">How often do you go for prenatal care checkups? Use this reminder to keep track of your prenatal appointment schedule.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a class="card-block stretched-link text-decoration-none" href="childvaccine.php">
        <div class="card card-img">
          <img src="images/vaccine.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Child Vaccination reminder</h5>
            <p class="card-text">Keep up-to-date on childhood vaccines by using this easy-to-read immunization schedule for infants and children.</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<hr>
<!--- Seperator -->
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h2 class="display-5">The latest from <span style="color: rgb(40, 139, 45)">Maternal Care</span></h2>
    </div>
  </div>
</div>

<!--Container-->
<div class="my-4" style="background-color:fff">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-2 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Pregnancy</strong>
          <h3 class="mb-0">Pregnancy Week by Week</h3>
          <div class="mb-1 text-muted">July 12</div>
          <p>Looking for a week-by-week guide to pregnancy? You're in luck!See how your baby is developing each week of your pregnancy.</p>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">First Trimester</p>
          </a>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">Second Trimester</p>
          </a>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">Third Trimester</p>
          </a>
          <br>
          <div>
            <a href="pregnancy.php" class="btn btn-outline-primary ">See More</a>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="280" src="images/pregnancy-week-40.jpg" alt="">


        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-2 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-secondary">Postpartum</strong>
          <h3 class="mb-0">Optimizing Postpartum Care</h3>
          <div class="mb-1 text-muted">May 25</div>
          <p>Your newborn might be your priority — but postpartum care counts, too. From soreness to discharge, what to expect as you recover from a vaginal delivery.</p>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">The postpartum checkup</p>
          </a>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">Medications</p>
          </a>
          <br>
          <br>
          <div>
            <a href="pregnancy.php" class="btn btn-outline-secondary ">See More</a>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="280" src="images/postpartum.jpeg" alt="">
          


        </div>
      </div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-2 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Health</strong>
          <h3 class="mb-0">Eat Healthy During Pregnancy: Quick Tips</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p>Recommended daily servings include 6-11 servings of breads and grains, two to four servings of fruit, four or more servings of vegetables, four servings of dairy products, and three servings of protein sources (meat, poultry, fish, eggs or nuts).</p>
          <br>
          <div>
            <a href="pregnancy.php" class="btn btn-outline-danger ">See More</a>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="280" src="images/health.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-2 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-warning">Child Care</strong>
          <h3 class="mb-0">Caring for a Newborn Baby</h3>
          <div class="mb-1 text-muted">May 25</div>
          <p>Your newborn might be your priority — but postpartum care counts, too. From soreness to discharge, what to expect as you recover from a vaginal delivery.</p>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">The postpartum checkup</p>
          </a>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">Medications</p>
          </a>
          <br>
          <br>
          <div>
            <a href="pregnancy.php" class="btn btn-outline-warning">See More</a>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="280" src="images/postpartum.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-2 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Pregnancy</strong>
          <h3 class="mb-0">Pregnancy Week by Week</h3>
          <div class="mb-1 text-muted">July 12</div>
          <p>Looking for a week-by-week guide to pregnancy? You're in luck!See how your baby is developing each week of your pregnancy.</p>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">First Trimester</p>
          </a>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">Second Trimester</p>
          </a>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">Third Trimester</p>
          </a>
          <br>
          <div>
            <a href="pregnancy.php" class="btn btn-outline-primary ">See More</a>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="280" src="images/pregnancy-week-40.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-2 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-secondary">Postpartum</strong>
          <h3 class="mb-0">Optimizing Postpartum Care</h3>
          <div class="mb-1 text-muted">May 25</div>
          <p>Your newborn might be your priority — but postpartum care counts, too. From soreness to discharge, what to expect as you recover from a vaginal delivery.</p>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">The postpartum checkup</p>
          </a>
          <a href="pregnancy.php" class="trimp">
            <p class="card-text mb-auto ">Medications</p>
          </a>
          <br>
          <br>
          <div>
            <a href="pregnancy.php" class="btn btn-outline-secondary ">See More</a>
          </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="280" src="images/postpartum.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<hr>

<!--Big Container-->
<div class="container-fluid padding">
  <div class="row padding">
    <div class=" col-lg-6">
      <h2>Highlight</h2>
      <br>
      <h3><span style="color: rgb(213, 26, 26); font-size: 1.6rem;   font-weight: bold;">Diet & Fitness</span></h3>
      <br>
      <p>A healthy pregnancy diet can do wonders for you and your baby. And exercise during pregnancy can boost your energy and your mood. There are plenty of great pregnancy-safe exercises, from prenatal yoga to swimming and weight training. You can probably continue your favorite pre-pregnancy workouts, but check in with your healthcare provider and make modifications if needed. As far as your pregnancy diet, it's important to skip unsafe foods and eat nutritious meals and snacks. You can do it!</p>
      <a href="https://www.ucsfhealth.org/education/exercise-during-pregnancy" id="bttn2" class="btn btn-outline-danger ">Learn More</a>
    </div>
    <br>
    <div class="col-lg-6">
      <img src="images/diet.jpg" alt="..." class="img-fluid">
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