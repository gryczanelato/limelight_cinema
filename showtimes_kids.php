<?php 
session_start(); 
if(isset($_SESSION['kidslogin']) || isset($_SESSION['adminlogin']))
{
?>

<!DOCTYPE html>
<html lang="en">

    <?php
      //making connection with db
      $conn = mysqli_connect("localhost", "HNCWEBMR19", "rAhXexAcqr", "HNCWEBMR19")
      or die("Cannot connect to database");
    ?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="lib/wow/wow.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style_kids.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
      </head>

    <body>

        <script>
            new WOW().init();
        </script>

        <header>
            <nav class="navbar navbar-expand-lg static-top" style="background-color:#001018;">
                <div class="container">
                    <a class="navbar-brand" href="home_kids.php">
                        <img src="logo/logo_kids.png" alt="Companys logo" height="100">
                    </a>
                    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home_kids.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="showtimes_kids.php">Showtimes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://www.ultimatequizquestions.com/kids-movie-quiz/#quizForm157">Entertainment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="venues_kids.php">Venues</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="experience_kids.php">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus_kids.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><button>Logout</button></a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="carouselHome" class="carousel slide wow fadeIn" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/matilda2.jpg" class="caro-img w-100" style="height: 800px;" alt="Matilda">
                    <div class="carousel-caption">
                        <div class="container">
                        <div class="d-flex align-items-end flex-column mb-2">
                            <div class="col-lg-6">
                            <div class="carousel-button2">
                                <button><a href="" class="btn">Book now</a></button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/avatar1.jpg" class="caro-img w-100" style="height: 800px;" alt="Avatar 2 poster">
                    <div class="carousel-caption">
                        <div class="container">
                        <div class="d-flex align-items-end flex-column mb-2">
                            <div class="col-lg-6">
                            <div class="carousel-button2">
                                <button><a href="" class="btn">Book now</a></button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/strange_world2.jpg" class="caro-img w-100" style="height: 800px;" alt="STrange World">
                    <div class="carousel-caption">
                        <div class="container">
                        <div class="d-flex align-items-end flex-column mb-2">
                            <div class="col-lg-6">
                            <div class="carousel-button2">
                                <button><a href="" class="btn">Book now</a></button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </header>
        
        <main class="home-content">

            <section class="pt-5 text-center container wow fadeInLeft">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <?php
                        echo"<h1 class='fw-regular'>What's on</h1>"; 
                        ?>
                    </div>
                </div>
            </section>

            <div class="fade_rule wow fadeIn"></div>
            <br><br>

            <section class="movies-section" id="movies">
                <div class="container px-4 px-lg-5">
                <?php

                    $sql = "SELECT title, director, description, picture, age_restriction FROM llc_movies";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row['age_restriction'] == 18) continue; // Goes to the next row if the film is rated 18
                            echo "<div class='row gx-0 mb-4 mb-lg-5'>";
                            echo "<div class='col-xl-4 col-lg-5 p-3 wow fadeIn'>";
                                echo "<img class='img-fluid mb-3 ms-5 mb-lg-0' src='" . $row['picture'] . "' alt='Movie poster' style='width:auto; height:320px'/>";
                            echo "</div>";
                            echo "<div class='col-xl-8 col-lg-7 pt-5 wow fadeInUp'>";
                                echo "<div>";
                                    echo "<h2 class='title-showpage'>" . $row['title'] . "</h2>";
                                    echo "<h3 class='directory text-50 mb-0 pb-1'>Directory:&nbsp</h3>";
                                    echo "<h4 class='d-name'>" . $row['director'] . "</h4>";
                                    echo"<h4 class='text-50 mb-0'>" . $row['description'] . "</h4>";
                                    echo"<div class='d-flex flex-row-reverse mx-4 mb-3 mb-lg-4'>";
                                        echo"<a class='nav-link px-5 pt-5' href='book.php'><button>Book now</button></a>";
                                    echo"</div>";
                                echo"</div>";
                            echo"</div>";
                            echo"</div>";                     
                        }
                    }
                    else echo "<h3 class='text-50 mb-0 pb-1'>No movies to show</h3>";
                ?>
                </div>
            </section>
        </main>

        <section class="pt-5 text-center container wow fadeInLeft">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-regular">Exclusives</h1>
                </div>
            </div>
        </section>

        <div class="fade_rule wow fadeIn"></div>
        <br><br>

        <div id="carouselDown" class="carousel slide wow fadeIn" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselDown" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselDown" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselDown" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/entertainment.jpeg" class="caro-img w-100 img-fluid" style="height:800px;" alt="Entertainment">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="d-flex align-items-end flex-column mb-2">
                                <div class="cta-JD col-lg-6 mt-6">
                                    <h1 class="animated-text slideInDown">Want to test yourself?</h1>
                                    <div class="carousel-button">
                                      <button><a target="_blank" href="https://www.ultimatequizquestions.com/kids-movie-quiz/#quizForm157"" class="btn">Check now</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/cinema_chair1.jpg" class="caro-img w-100 img-fluid" style="height:800px;" alt="Welcoming to Limelight Cinema">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="d-flex align-items-end flex-column mb-2">
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
                <div class="carousel-item">
                    <img src="images/index_carousel_upper.png" class="caro-img w-100 img-fluid" alt="Welcoming to Limelight Cinema">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="d-flex align-items-end flex-column mb-2">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDown" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDown" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


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
                    <a href="home_kids.php" class="nav-link px-2">Home</a>
                </li>
                <li class="nav-item">
                    <a href="venues_kids.php" class="nav-link px-2">About us</a>
                </li>
                <li class="nav-item">
                    <a href="contactus_kids.php#faq" class="nav-link px-2">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="contactus_kids.php#contact_form" class="nav-link px-2">Contact us</a>
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

        <?php
            }
            else {
                echo "<h3 class='text-center' style='color:red;size:30px'>You are not allowed access here</h3>";
                header( "Refresh:3; url=http://webdev.edinburghcollege.ac.uk/~HNCWEBMR19/llc/loginform.php", true, 303);
            }
        ?>

    </body>
</html>