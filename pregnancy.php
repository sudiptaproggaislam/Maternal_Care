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
<hr>
  <!-- Trimester -->

  <div class="container-fluid padding">
    <div class="ml-auto justify-content-center" id="firsttrimester">
      <div class="row d-flex ">
        <div class="col-12 text-center"><h2 style="color:rgb(25, 109, 127)">First Trimester: 0 to 13 Weeks</h2></div>
        <div class="trimesterdiv">
          <p id="trimesterpara">Trimesters are counted from the start of your last menstrual period (are you sensing how important that date is). Remember, your fallopian tube doesn’t release an egg (that is later fertilized) until about 2 weeks after that period — so you’re not even actually PREGNANT until week 2 or so, but that’s how we count it.
            It is important that you take a prenatal vitamin as soon as you find out you’re pregnant. Actually, all women who have any chance of pregnancy should be taking a prenatal vitamin, as studies have shown that it can prevent issues with the spinal cord development and birth defects.
            There are lots of early signs of pregnancy that you could be experiencing, due to changes in the pregnancy hormones in your body. These can include nosebleeds, morning sickness, tenderness of your breasts and more.</p>
        </div>
      </div>
      <div class=" mx-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">2 weeks pregnant
            </h4>
            <p>It's a potentially life-changing week. You'll ovulate, and if egg meets sperm, you'll be on your way to pregnancy!
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/2week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">3 weeks pregnant
            </h4>
            <p>Your baby is a tiny ball – called a blastocyst – made up of several hundred cells that are multiplying quickly.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/3week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">4 weeks pregnant
            </h4>
            <p>Deep in your uterus, your baby is an embryo made up of two layers, and your primitive placenta is developing.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/4week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">5 weeks pregnant
            </h4>
            <p>Your tiny embryo is growing like crazy, and you may be noticing pregnancy discomforts like sore breasts and fatigue.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/5week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">6 weeks pregnant
            </h4>
            <p>Your baby's nose, mouth, and ears are beginning to take shape. You may be having morning sickness and spotting.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/6week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">7 weeks pregnant
            </h4>
            <p>Your baby – still an embryo with a small tail – is forming hands and feet. Your uterus has doubled in size.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/7week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">8 weeks pregnant
            </h4>
            <p>Your baby is constantly moving, though you can't feel it. Meanwhile, you may be making decisions about prenatal tests.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/8week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">9 weeks pregnant
            </h4>
            <p>Nearly an inch long now, your baby is starting to look more human. You've probably noticed your waist thickening.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/9week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">10 weeks pregnant
            </h4>
            <p>Your baby has finished the most critical part of development! Organs and structures are in place and ready to grow.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/10week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">11 weeks pregnant
            </h4>
            <p>Your baby's hands will soon open and close into fists, and tiny tooth buds are appearing underneath the gums.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/11week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">12 weeks pregnant
            </h4>
            <p>Your little one's teeny toes can curl, her brain is growing furiously, and her kidneys are starting to excrete urine.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/12week.jpg" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">13 weeks pregnant
            </h4>
            <p>It's the last week of the first trimester! Your baby now has exquisite fingerprints and is almost 3 inches long.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/13week.jpg" alt="">

          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="ml-auto justify-content-center" id="secondtrimester">
      <div class="row d-flex">
      <div class="col-12 text-center"><h2 style="color:rgb(25, 109, 127)">Second Trimester: 14 to 27 Weeks</h2></div>
        <div class="trimesterdiv">
          <p id="trimesterpara">At the start of the second trimester, pregnant women tend to start to feel better from the morning sickness. At this stage fetal development is in full gear. You’ll likely see some weight gain and a baby bump will be more pronounced.

            You might even start to feel the baby move around 20 weeks. It can be hard since when people feel the baby move is based on a variety of things including where the placenta is on the uterus.

            There are a few pregnancy tests you’ll take during this trimester (including the glucose/diabetes test), but it is the most relaxed of all the trimesters.</p>
        </div>
      </div>
      <div class=" mx-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">14 weeks pregnant
            </h4>
            <p>Your baby's tiny features are making different expressions. And you may be feeling more energetic and less nauseated.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/14week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">15 weeks pregnant
            </h4>
            <p>Your baby can sense light and is forming taste buds. Have a stuffy nose? It's a surprising pregnancy side effect.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/15week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">16 weeks pregnant
            </h4>
            <p>Get ready for a growth spurt. In the next few weeks, your baby will double his weight and add inches to his length.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/16week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">17 weeks pregnant
            </h4>
            <p>Your baby's skeleton is changing from soft cartilage to bone, and the umbilical cord is growing stronger and thicker.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/17week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">18 weeks pregnant
            </h4>
            <p>Your baby's genitals are developed enough to see on an ultrasound. Hungry? An increase in appetite is normal now.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/18week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">19 weeks pregnant
            </h4>
            <p>Go ahead and sing: Your baby may be able to hear you! And if your sides are aching, it could be round ligament pain.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/19week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">20 weeks pregnant
            </h4>
            <p>Congratulations, you're at the halfway mark in your pregnancy! Your baby is swallowing more now and producing meconium.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/20week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">21 weeks pregnant
            </h4>
            <p>Feeling your baby move? Those early flutters will turn into full-fledged kicks. Cool fact: She has eyebrows now!
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/21week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">22 weeks pregnant
            </h4>
            <p>Your baby is starting to look like a miniature newborn. And your growing belly may be turning into a hand-magnet.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/22week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">23 weeks pregnant
            </h4>
            <p>When you're on the move, your baby can feel the motion. Pretty soon, you may notice swelling in your ankles and feet.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/23week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">24 weeks pregnant
            </h4>
            <p>Your baby is long and lean, like an ear of corn. And your growing uterus is now the size of a soccer ball.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/24week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">25 weeks pregnant
            </h4>
            <p>Your little one is starting to add some baby fat and grow more hair. Your hair may be looking extra lustrous, too.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/25week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">26 weeks pregnant
            </h4>
            <p>Your baby is inhaling and exhaling small amounts of amniotic fluid, which is good practice for breathing.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/26week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">27 weeks pregnant
            </h4>
            <p>Feel a tickle? It may be your baby hiccupping. He's also opening and closing his eyes and even sucking his fingers.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/27week.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="ml-auto justify-content-center" id="thirdtrimester">
      <div class="row d-flex">
      <div class="col-12 text-center"><h2 style="color:rgb(25, 109, 127)">Third Trimester: 28 to 40+ Weeks</h2></div>
        <div class="trimesterdiv">
          <p id="trimesterpara">At the start of your third trimester of pregnancy, your baby is pretty well formed and just growing inside of you. It’s important that you stay very hydrated during this pregnancy (I do have a whole post on if drinking gatorade during pregnancy is OK and all the other fluids you can use to hydrate).

            At this point, you may have more testing. Possibly more ultrasounds, or tests like the BPP or checking amniotic fluid levels (that means how much water is in the amniotic sac). Make sure that you keep scheduled appointments with your healthcare provider.</p>
        </div>
      </div>
      <div class=" mx-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">28 weeks pregnant
            </h4>
            <p>Welcome to your last trimester! Your developing baby's eyes may be able to see light filtering in through your womb.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/28week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">29 weeks pregnant
            </h4>
            <p>Your baby's muscles and lungs are continuing to mature, and her head is growing to make room for her developing brain.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/29week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">30 weeks pregnant
            </h4>
            <p>Your baby now weighs almost 3 pounds. Meanwhile, you may be battling mood swings, clumsiness, and fatigue.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/30week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">31 weeks pregnant
            </h4>
            <p>Your baby's strong kicks might be keeping you up at night – and you may be feeling Braxton Hicks contractions, too.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/31week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">32 weeks pregnant
            </h4>
            <p>Your baby is plumping up! Meanwhile, your expanding uterus may cause heartburn and shortness of breath.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/32week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">33 weeks pregnant
            </h4>
            <p>With your baby now weighing a little over 4 pounds, you might be waddling – and having trouble getting comfy in bed.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/33week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">34 weeks pregnant
            </h4>
            <p>Your baby's central nervous system and lungs are maturing, and dizziness and fatigue may be slowing you down.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/34week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">35 weeks pregnant
            </h4>
            <p>Your baby is too snug in your womb to do somersaults, but you'll still feel frequent – if less dramatic – movements.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/35week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">36 weeks pregnant
            </h4>
            <p>Your baby is gaining about an ounce a day. You may feel her "drop" down into your pelvis as you approach your due date.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/36week.png" alt="">

          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">37 weeks pregnant
            </h4>
            <p>Your baby's brain and lungs are continuing to mature. You may have more vaginal discharge and occasional contractions.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/37week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">38 weeks pregnant
            </h4>
            <p>Your baby has a firm grasp, which you'll soon be able to test in person! Meanwhile, watch out for signs of preeclampsia.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/38week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">39 weeks pregnant
            </h4>
            <p>Your baby is full term this week and waiting to greet the world! If your water breaks, call your healthcare provider.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/39week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">40 weeks pregnant
            </h4>
            <p>Your baby is the size of a small pumpkin! Don't worry if you're still pregnant – it's common to go past your due date.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/40week.png" alt="">
          </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
          <div class="col-md-10 order-md-2">
            <h4 class="featurette-heading">41 weeks pregnant
            </h4>
            <p>As cozy as he is, your baby can't stay inside you much longer. You'll go into labor or be induced soon.
            </p>
          </div>
          <div class="col-md-2 order-md-1">
            <img class="img-fluid" src="images/41week.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<?php
include("partials/footer.php");
?>