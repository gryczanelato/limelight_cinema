<!-- starting session with php before html -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- title -->
        <title>Limelight Cinema</title>

        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kamila Maciejczak EC2047353">

        <!-- linking Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- linking fonts-awesome - icons -->
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- running jQueries -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- activating animations  -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="lib/wow/wow.min.js"></script>

        <!-- linking css stylesheet -->
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- linking fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      </head>

    <body>
        <header>
            <!-- navigation bar-->
            <nav class="navbar navbar-expand-lg static-top wow fadeIn">
                <div class="container">
                    <!-- logo with button directing to home page -->
                  <a class="navbar-brand" href="index.php">
                    <img src="logo/logo_no_bckgr.png" alt="Companys logo" height="100">
                  </a>
                  <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- end of logo section -->
                  <!-- navigation with links to subpages -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="showtimes.php">Showtimes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="venues.php">Venues</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="experience.php">Experience</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                      </li>
                      <!-- login/logout button -->
                      <li class="nav-item">
                        <!-- changing button to Logout after user's session starts -->
                        <?php
                            if (isset($_SESSION['adultlogin']) || isset($_SESSION['adminlogin'])) {
                                echo "<a class='nav-link' href='logout.php'><button>Logout</button></a>";
                            }
                            else {
                                echo "<a class='nav-link' href='loginform.php'><button>Login</button></a>";
                            }
                        ?>
                      </li>
                    </ul>
                  </div>
                  <!-- end of navigation -->
                </div>
              </nav>
              <!-- end of navigation bar -->

              <!-- carousel with special offers and movies -->
              <div id="carouselHome" class="carousel slide wow fadeIn" data-bs-ride="carousel">
                <!-- indicators on the bottom of carousel -->
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!-- first picture, description and button -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/index_carousel_upper.png" class="caro-img w-100" alt="Welcoming to Limelight Cinema">
                    <div class="carousel-caption">
                      <div class="container">
                        <div class="d-flex align-items-end flex-column ">
                          <div class="cta-JG col-lg-6">
                            <h1 class="animated-text slideInDown">Welcome<br>to Limelight Cinema</h1>
                            <div class="carousel-button">
                              <button><a href="showtimes.php" class="btn">Read more</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- second picture, description and button -->
                  <div class="carousel-item">
                    <img src="images/avatar1.jpg" class="caro-img w-100" style="height: 800px;" alt="Avatar 2 poster">
                    <div class="carousel-caption">
                      <div class="container">
                        <div class="d-flex align-items-end flex-column ">
                          <div class="col-lg-6">
                            <div class="carousel-button2">
                              <button><a href="showtimes.php" class="btn">Book now</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- third picture, description and button -->
                  <div class="carousel-item">
                    <img src="images/home_carousel_2.jpg" class="caro-img w-100" alt="Cinema snacks commercial">
                    <div class="carousel-caption">
                      <div class="container">
                        <div class="d-flex align-items-end flex-column ">
                          <div class="cta-JG col-lg-6">
                            <h1 class="animated-text slideInDown">Ultimate snack offers - don't miss it!</h1>
                            <div class="carousel-button">
                              <button><a href="experience.php" class="btn">Check more</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- left and right buttons to manualy swipe carousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- end of carousel -->
        </header>
        
        <!-- header -->
        <main class="home-content">
            <section class="py-5 text-center container wow fadeInLeft">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-regular">What's on</h1>
                    </div>
                </div>
            </section>


            <!-- decorative line -->
            <div class="fade_rule wow fadeIn"></div>
            <br><br>


            <!-- mvoie display with booking buttons moving to showtimes page -->
            <div class="movie-container align-items-center justify-content-center">
                <!-- first row with movies -->
                <div class="container pb-4">
                    <div class="row g-5">
                        <!-- first movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/avatar3.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                      <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="title-box position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px; background-color: #00070b;">
                                        <h5 class="movie-title">Avatar 2</h5>
                                        <h6 class="directory-home">by&nbsp</h6>
                                        <h6 class="d-name">James Cameron</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square  mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- second movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.3s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/whitney1.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                        <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-2" style="height: 90px; background-color: #00070b;">
                                        <h5 class="movie-title">Whitney Houston</h5>
                                        <h6 class="director">by Kasi Lemmons</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square btn mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- third movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.5s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/matilda1.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                        <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-2" style="height: 90px; background-color: #00070b;">
                                        <h5 class="movie-title">Roald Dahl's Matilda</h5>
                                        <h6 class="director">by Kasi Lemmons</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square btn mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of row -->

                <!-- second row with movies -->
                <div class="container py-4">
                    <div class="row g-5">
                        <!-- 4th movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/violent_night3.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                      <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px; background-color: #00070b;">
                                        <h5 class="movie-title">Violent Night</h5>
                                        <h6 class="director">by Tommy Wirkola</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square  mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 5th movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.3s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/black_panther1.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                        <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-2" style="height: 90px; background-color: #00070b;">
                                        <h5 class="movie-title">Black Panther</h5>
                                        <h6 class="director">by Ryan Coogler</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square btn mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6th movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.5s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/strange_world1.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                        <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-2" style="height: 90px; background-color: #00070b;">
                                        <h5 class="movie-title">Strange World</h5>
                                        <h6 class="director">by Don Hall</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square btn mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of row -->

                <!-- third row with movies -->
                <div class="container py-4">
                    <div class="row g-5">
                        <!-- 7th movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/polar_express.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                      <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px; background-color: #00070b;">
                                        <h5 class="movie-title">The Polar Express</h5>
                                        <h6 class="director">by Robert Zemeckis</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square  mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 8th movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.3s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/the_menu1.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                        <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-2"
                                        style="height: 90px; background-color: #00070b;">
                                        <h5>The Menu</h5>
                                        <h6 class="director">by Mark Mylod</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square btn mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 9th movie -->
                        <div class="col-lg-4 d-flex justify-content-between wow fadeInUp" data-wow-delay="0.5s">
                            <div class="movie-item">
                                <img class="img-fluid" style="height:400px; width:auto;" src="images/devil1.jpg" alt="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-square" style="background-color:#ffb30f; width: 60px; height: 90px;">
                                        <i class="fa fa-2x fa-share text-white"></i>
                                    </div>
                                    <div class="position-relative overflow-hidden d-flex flex-column justify-content-center w-100 ps-2"
                                        style="height: 90px; background-color: #00070b;">
                                        <h5>Prey for the devil</h5>
                                        <h6 class="director">by Daniel Stamm</h6>
                                        <div class="movie-button-arrow">
                                            <a class="btn btn-square btn mx-1" href="loginform.php">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of display movie section -->
                
            </div>
        </main>


        <!-- header -->
        <section class="py-5 text-center container wow fadeInLeft">
          <div class="row py-lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">
                  <h1 class="fw-regular">Exclusives</h1>
              </div>
          </div>
        </section>

        <!-- decorative line -->
        <div class="fade_rule wow fadeIn"></div>
        <br><br>

        <!-- carousel with special offers -->
        <div id="carouselDown" class="carousel slide wow fadeIn" data-bs-ride="carousel">
            <!-- indicators on the bottom of carousel -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselDown" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselDown" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselDown" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <!-- first picture, description and button -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/carousel_picture_1.png" class="caro-img w-100 img-fluid" alt="Welcoming to Limelight Cinema">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="d-flex align-items-end flex-column">
                                <div class="cta-JD col-lg-6 mt-6">
                                    <h1 class="animated-text slideInDown">Want to book tickets? Create an account!</h1>
                                    <div class="carousel-button">
                                      <button><a href="loginform.php" class="btn">Register now</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second picture, description and button -->
                <div class="carousel-item">
                    <img src="images/cinema_chair1.jpg" class="caro-img w-100 img-fluid" style="height:800px;" alt="Welcoming to Limelight Cinema">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="d-flex align-items-end flex-column">
                                <div class="cta-JD col-lg-6 mt-6">
                                    <h1 class="animated-text slideInDown">Try our ultra comfortable seats!</h1>
                                    <div class="carousel-button">
                                      <button><a href="venues.php" class="btn">Read more</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third picture, description and button -->
                <div class="carousel-item">
                    <img src="images/index_carousel_upper.png" class="caro-img w-100 img-fluid" alt="Welcoming to Limelight Cinema">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="d-flex align-items-end flex-column">
                                <div class="cta-JD col-lg-6 mt-6">
                                    <h1 class="animated-text slideInDown">Want to find our venues?</h1>
                                    <div class="carousel-button">
                                      <button><a href="experiences.php" class="btn">Read more</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left and right buttons to manualy swipe carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDown" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDown" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- end of carousel -->


        <!-- footer -->
        <footer class="py-3 my-4 wow fadeIn">
            <!-- decorative line -->
          <hr class="footer-line">
          <!-- social media links section -->
            <ul class="nav col d-flex justify-content-center pb-3 my-2 mx-auto">
                <li class="nav-item">
                    <a href="https://www.instagram.com/" target="_blank" class="nav-link px-2">
                        <img src="icons/instagram.png" class="social-icon" style="width: 40px; height:auto" alt="Instagram link">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/" target="_blank" class="nav-link px-2">
                        <img src="icons/facebook.png" class="social-icon" style="width: 40px; height:auto" alt="Facebook link">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.youtube.com/" target="_blank" class="nav-link px-2">
                        <img src="icons/yt.png" class="social-icon" style="width: 40px; height:auto" alt="YouTube link">
                    </a>
                </li>
            </ul>
            <!-- navigation links section -->
            <ul class="nav justify-content-center pb-3 my-2 mx-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link px-2">Home</a>
                </li>
                <li class="nav-item">
                    <a href="venues.php" class="nav-link px-2">About us</a>
                </li>
                <li class="nav-item">
                    <a href="contactus.php#faq" class="nav-link px-2">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="contactus.php#contact_form" class="nav-link px-2">Contact us</a>
                </li>
            </ul>
            <!-- Terms&Conditions and Privacy Policy section -->
            <ul class="nav justify-content-center pb-3 my-2">
                <li class="nav-item">
                    <a href="t_c.html" class="nav-link px-2">Terms & Conditions</a>
                </li>
                <li class="nav-item">
                    <a href="pp.html" class="nav-link px-2">Privacy Policy</a>
                </li>
            </ul>
          <hr class="bottom-line">
          <p class="text-center text-muted mt-3">© 2022 Kamila Maciejczak, EC2047353</p>
        </footer>
        <!-- end of footer -->

        <!-- script for JS for wow animations -->
        <script>
            new WOW().init();
        </script>

    </body>
</html>
<!-- end of website -->