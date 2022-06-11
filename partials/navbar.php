<header class="nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link" href="#">Pregnancy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about.html">Postpartum Care</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Child Care</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Parenting</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Resources
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop">
                <li><a class="dropdown-item" href="#">Calculate Due Date</a></li>
                <li><a class="dropdown-item" href="#">Reminder for Visits</a></li>
                <li><a class="dropdown-item" href="#">Child Vaccination</a></li>

              </ul>
            </li>
          </ul>
          <?php if(!isset($_SESSION['authenticated'])): ?>
          <div class=" ml-auto justify-content-end">
            <button class="btn " id="login" class="login"><a href="login.php" class="login">Login</a></button>
            <button class="btn " id="signup" class="signup"><a href="signup.php" class="signup" >SignUp</a></button>
          </div>
          <?php endif ?>
          <?php if(isset($_SESSION['authenticated'])): ?>
          <div class=" ml-auto justify-content-end">
          <button class="btn " name="logout" class="logout"><a href="logout.php" class="logout" >LOG OUT</a></button>

          </div> 
          <?php endif ?>
        </div>
      </div>
    </nav>
  </header>