<?php include("partials/config.php");
      include("partials/header.php");
      $page_title = "Maternal Care";
 ?>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-expand-md sticky-top" id="logo-nav" style="background-color: rgb(148, 203, 219,0.7) !important; " id="logonav">
    <div class="container-fluid" id="logo">
      <div class="welcome text-center">
        <div class="col-12">
          <h1 id="bwe" class="display-4"><a class="navbar-brand" href="home.php">
              <img src="images/logo.png" alt="" width="60" height="55" class="jumbotron-heading " class="d-inline-block align-text-top"><span id="txt"><b> MATERNAL CARE</b></span>
            </a></h1>
        </div>
      </div>
    </div>
  </nav>
  <?php include("partials/navbar.php");?>
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
        <img src="images/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Pregnancy Week by Week</h1>
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
        <a class="card-block stretched-link text-decoration-none" href>
          <div class="card">
            <img src="images/duedate.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Due Date Calculator</h5>
              <p class="card-text">When is your baby due? Use this pregnancy calculator to find your due date based on the date of your last menstrual period.</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a class="card-block stretched-link text-decoration-none" href>
          <div class="card">
            <img src="images/visit.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Reminder for visits</h5>
              <p class="card-text">How often do you go for prenatal care checkups? Use this reminder to keep track of your prenatal appointment schedule.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a class="card-block stretched-link text-decoration-none" href>
          <div class="card">
            <img src="images/vaccine.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Child Vaccination reminder</h5>
              <p class="card-text"> Which vaccines do children need to be given? Keep up-to-date on childhood vaccines by using this easy-to-read immunization schedule for infants and children.</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
<?php include("partials/footer.php"); ?>