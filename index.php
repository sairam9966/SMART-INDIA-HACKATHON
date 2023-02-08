<?php include("./header.php"); ?>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" style="font-size:1.5rem;" href="#">Innovative Ideas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active ms-5" aria-current="page" style="font-size:1.3rem;" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-5" style="font-size:1.3rem;" href="#">About ASIIM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-5" style="font-size:1.3rem;" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-5" style="font-size:1.3rem;" href="#">Contact Us</a>
          </li>
        </ul>
        <div>
          <button class="btn btn-outline-danger btn-md me-md-2" data-bs-toggle="modal" data-bs-target="#studentLogin"
            style="color:white;font-size:1.2rem;" type="button">Student Login</button>
          <button class="btn  btn-outline-success btn-md" data-bs-toggle="modal" data-bs-target="#selectorLogin"
            style="color:white;font-size:1.2rem;" type="button">Selector Login</button>
        </div>
      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" style="background-color: black;"
        data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" style="background-color: black;"
        data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" style="background-color: black;"
        data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="./slider-images/ASIIM-Roadshow-New-1.jpg" height="700px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="color:black;">
          <!-- <h5>First slide label</h5> -->
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="./slider-images/3.jpg" height="700px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Second slide label</h5> -->
          <!-- <p>Some representative placeholder content for the second slide.</p> -->
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="./slider-images/2.jpg" height="700px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Third slide label</h5> -->
          <!-- <p>Some representative placeholder content for the third slide.</p> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" style="background-color: black;" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="modal fade" id="studentLogin" tabindex="-1" aria-labelledby="studentLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg w-500">
      <div class="modal-content" style="--bs-modal-border-width: 0px;">
        <div class="modal-header "
          style="background-image: linear-gradient(to right top, #020024, #3b0d4a, #870057, #cd0043, #fb0000);color: white">
          <h5 class="modal-title" style="margin-left: auto; font-size: 1.7rem" id="studentLoginModalLabel">STUDENT LOGIN
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" data-mdb-toggle="pill" href="#pills-stud-login" role="tab"
                  aria-controls="pills-login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-mdb-toggle="pill" href="#pills-stud-register" role="tab"
                  aria-controls="pills-register" aria-selected="false">Register</a>
              </li>
            </ul>

            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">

              <!-- /**** Login ****/ -->
              <?php include("./studentLogin.php");  ?>

              <!-- /**** Register ****/ -->
              <?php include("./studentRegister.php"); ?>

            </div>
            <!-- Pills content -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="selectorLogin" tabindex="-1" aria-labelledby="selectorLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg w-500">
      <div class="modal-content" style="--bs-modal-border-width: 0px;">
        <div class="modal-header"
          style="background-image: linear-gradient(to right top, #020024, #3b0d4a, #870057, #cd0043, #fb0000);color: white">
          <h5 class="modal-title" style="margin-left: auto; font-size: 1.7rem" id="selectorLoginModalLabel">SELECTOR
            LOGIN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" data-mdb-toggle="pill" href="#pills-selec-login" role="tab"
                  aria-controls="pills-login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-mdb-toggle="pill" href="#pills-selec-register" role="tab"
                  aria-controls="pills-register" aria-selected="false">Register</a>
              </li>
            </ul>

            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">

              <!-- /**** Login ****/ -->
              <?php include("./selectorLogin.php");  ?>

              <!-- /**** Register ****/ -->
              <?php include("./selectorRegister.php"); ?>

            </div>
            <!-- Pills content -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include("./footer.php"); ?>