<?php
$page_title = "Pregnancy";
include('partials/link.php');
include('partials/header.php');
// include('authentication.php');
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-expand-md" id="logo-nav" style="background-color: rgb(148, 203, 219,0.7) !important; " id="logonav">
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

<!-- Picture starts-->
<!-- <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pregnancy (3).jpg" class="d-block w-100 " alt="...">
    </div>
  </div>
</div> -->
<!--Carousel-->
<div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/pregnancy (3).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
</div>

<!--- Seperator -->
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-5">Pregnancy Week-by-Week</h1>
      <p>Wondering when you’ll feel your baby’s first kick or when you’ll have your first pregnancy ultrasound? Consider this week-by-week pregnancy calendar your ultimate guide to the next nine months.</p>
    </div>
  </div>
</div>

<section class="pregnancy">
<!--- Seperator -->
<div class="container-fluid padding">
  <div class="ml-auto justify-content-center">
    <div class="row d-flex">
      <div class="col-md-4">
        <a href="#firsttrimester"><input id="trimester" value="First Trimester" class="btn btn-outline-info w-100"></a>
      </div>
      <div class="col-md-4">
        <a href="#secondtrimester"><input id="trimester" value="Second Trimester" class="btn btn-outline-info w-100"></a>
      </div>
      <div class="col-md-4">
        <a href="#thirdtrimester"><input id="trimester" value="Third Trimester" class="btn btn-outline-info w-100"></a>
      </div>
    </div>
  </div>
</div>

<!-- Trimester -->

<div class="container-fluid padding">
  <div class="ml-auto justify-content-center" id="firsttrimester">
    <div class="row d-flex">
      <h2 style="color:rgb(25, 109, 127)">First Trimester: 0 to 13 Weeks</h2>
      <div class="trimesterdiv"><p id="trimesterpara">Trimesters are counted from the start of your last menstrual period (are you sensing how important that date is). Remember, your fallopian tube doesn’t release an egg (that is later fertilized) until about 2 weeks after that period — so you’re not even actually PREGNANT until week 2 or so, but that’s how we count it.
        It is important that you take a prenatal vitamin as soon as you find out you’re pregnant. Actually, all women who have any chance of pregnancy should be taking a prenatal vitamin, as studies have shown that it can prevent issues with the spinal cord development and birth defects.
        There are lots of early signs of pregnancy that you could be experiencing, due to changes in the pregnancy hormones in your body. These can include nosebleeds, morning sickness, tenderness of your breasts and more.</p>
        </div>
      </div>
  </div>
  <div class="ml-auto justify-content-center" id="secondtrimester">
    <div class="row d-flex">
      <h2 style="color:rgb(25, 109, 127)">Second Trimester: 14 to 27 Weeks</h2>
      <div class="trimesterdiv"><p id="trimesterpara">At the start of the second trimester, pregnant women tend to start to feel better from the morning sickness. At this stage fetal development is in full gear. You’ll likely see some weight gain and a baby bump will be more pronounced.

        You might even start to feel the baby move around 20 weeks. It can be hard since when people feel the baby move is based on a variety of things including where the placenta is on the uterus.

        There are a few pregnancy tests you’ll take during this trimester (including the glucose/diabetes test), but it is the most relaxed of all the trimesters.</p>
    </div>
    </div>
  </div>
  <div class="ml-auto justify-content-center" id="thirdtrimester">
    <div class="row d-flex">
      <h2 style="color:rgb(25, 109, 127)">Third Trimester: 28 to 40+ Weeks</h2>
      <div class="trimesterdiv"><p id="trimesterpara">At the start of your third trimester of pregnancy, your baby is pretty well formed and just growing inside of you. It’s important that you stay very hydrated during this pregnancy (I do have a whole post on if drinking gatorade during pregnancy is OK and all the other fluids you can use to hydrate).

        At this point, you may have more testing. Possibly more ultrasounds, or tests like the BPP or checking amniotic fluid levels (that means how much water is in the amniotic sac). Make sure that you keep scheduled appointments with your healthcare provider.</p>
    </div>
    </div>
  </div>
</div>
</section>
<?php
include("partials/footer.php");
?>