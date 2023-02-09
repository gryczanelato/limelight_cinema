<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Limelight Cinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kamila Maciejczak EC2047353">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <link src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/df4571720a.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="lib/wow/wow.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
      </head>

    <body>

        <script>
            new WOW().init();
        </script>

        <header>
          <nav class="navbar navbar-expand-lg static-top wow fadeIn">
              <div class="container">
                <a class="navbar-brand" href="index.php">
                  <img src="logo/logo_no_bckgr.png" alt="Companys logo" height="100">
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="showtimes.php">Showtimes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="venues.php">Venues</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="experience.php">Experience</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
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
              </div>
          </nav>
          <div class="text-center wow fadeIn">
            <img class="caro-img w-100 d-block mx-auto" style="height: 800px;" src="images/row_of_chairs.jpeg" alt="Cinema commercial">
          </div>  
        </header>

        <main>
            <section class="py-5 text-center container wow fadeInLeft">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-regular">Our venues</h1>
                    </div>
                </div>
            </section>

            <div class="fade_rule wow fadeIn"></div>
            <br><br>

            <section class="our-venues">
                <div class="container d-block align-items-center">

                    <div class="container px-4 px-lg-5">
                        <div class="data-box row gx-0 mb-4 mb-lg-5 d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 py-3 ps-5 wow fadeIn">
                                <img class="img-fluid ps-5 mb-3 ms-5 mb-lg-0" src="icons/li-blue.png" alt="Movie poster" style="width:auto; height:180px"/>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="pt-4">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                        <i class="fa-solid fa-house p-2 mb-2"></i>
                                        <h3>DALKEITH - 123 High Street EH22 1BB</h3>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s">
                                        <i class="fa-solid fa-phone p-2 mt-1 mb-2"></i>
                                        <h4 class="text-50 mb-0 pb-1">0131 111 1111</h4>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.5s">
                                        <i class="fa-solid fa-envelope p-2 mt-2 mb-2"></i>
                                        <h4 class="text-50 mb-0">dalkeith@limelightcinema.co.uk</h4>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="data-box row gx-0 mb-4 mb-lg-5 d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 py-3 ps-5 wow fadeIn">
                                <img class="img-fluid ps-5 mb-3 ms-5 mb-lg-0" src="icons/li-green.png" alt="Movie poster" style="width:auto; height:180px"/>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="pt-4">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                        <i class="fa-solid fa-house p-2 mb-2"></i>
                                        <h3>DANDERHALL - 94 Edmondstone Road EH22 1QU</h3>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s">
                                        <i class="fa-solid fa-phone p-2 mt-1 mb-2"></i>
                                        <h4 class="text-50 mb-0 pb-1">0131 222 2222</h4>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.5s">
                                        <i class="fa-solid fa-envelope p-2 mt-2 mb-2"></i>
                                        <h4 class="text-50 mb-0">danderhall@limelightcinema.co.uk</h4>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="data-box row gx-0 mb-4 mb-lg-5 d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 py-3 ps-5 wow fadeIn">
                                <img class="img-fluid ps-5 mb-3 ms-5 mb-lg-0" src="icons/li-red.png" alt="Movie poster" style="width:auto; height:180px"/>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="pt-4">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                        <i class="fa-solid fa-house p-2 mb-2"></i>
                                        <h3>GOREBRIDGE - 13 Station Road EH23 4JX</h3>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s">
                                        <i class="fa-solid fa-phone p-2 mt-1 mb-2"></i>
                                        <h4 class="text-50 mb-0 pb-1">0131 333 3333</h4>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.5s">
                                        <i class="fa-solid fa-envelope p-2 mt-2 mb-2"></i>
                                        <h4 class="text-50 mb-0">gorebridge@limelightcinema.co.uk</h4>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="data-box row gx-0 mb-4 mb-lg-5 d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 py-3 ps-5 wow fadeIn">
                                <img class="img-fluid ps-5 mb-3 ms-5 mb-lg-0" src="icons/li-yellow.png" alt="Movie poster" style="width:auto; height:180px"/>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="pt-4">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                        <i class="fa-solid fa-house p-2 mb-2"></i>
                                        <h3>LOANHEAD - 87 High Street EH20 9RT</h3>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s">
                                        <i class="fa-solid fa-phone p-2 mt-1 mb-2"></i>
                                        <h4 class="text-50 mb-0 pb-1">0131 444 4444</h4>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.5s">
                                        <i class="fa-solid fa-envelope p-2 mt-2 mb-2"></i>
                                        <h4 class="text-50 mb-0">loanhead@limelightcinema.co.uk</h4>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="data-box row gx-0 mb-4 mb-lg-5 d-flex justify-content-center">
                            <div class="col-xl-6 col-lg-6 py-3 ps-5 wow fadeIn">
                                <img class="img-fluid ps-5 mb-3 ms-5 mb-lg-0" src="icons/li-blue.png" alt="Movie poster" style="width:auto; height:180px"/>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="pt-4">
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                        <i class="fa-solid fa-house p-2 mb-2"></i>
                                        <h3>PENICUIK - 175 John Street EH26 8AT</h3>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s">
                                        <i class="fa-solid fa-phone p-2 mt-1 mb-2"></i>
                                        <h4 class="text-50 mb-0 pb-1">0131 555 5555</h4>
                                    </div>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.5s">
                                        <i class="fa-solid fa-envelope p-2 mt-2 mb-2"></i>
                                        <h4 class="text-50 mb-0">penicuik@limelightcinema.co.uk</h4>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="map-box row d-flex justify-content-center wow fadeIn">
                        <div class="col-md-12 pt-5">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d286897.9454038916!2d-3.1076386999999936!3d55.82118630000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488794d54deeb667%3A0xb631fd243f1e1e31!2sMidlothian!5e0!3m2!1sen!2suk!4v1670330131026!5m2!1sen!2suk" width="800px" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="py-3 my-4 wow fadeIn">
            <hr class="footer-line">
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
      </body>
  </html>