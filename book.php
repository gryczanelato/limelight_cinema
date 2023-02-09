<?php 
session_start(); 
if(isset($_SESSION['adminlogin']) || isset($_SESSION['adultlogin']))
{
?>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="lib/wow/wow.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
      </head>

    <body>
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
                        <a class="nav-link" href="venues.php">Venues</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="experience.php">Experience</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <?php
                            if (isset($_SESSION['adultlogin'])) {
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
            </div>
        </header>

        <main class="home-content">
            <section class="py-5 text-center container wow fadeInLeft">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                    <?php
                    echo" <h1 class='fw-regular'>Book tickets</h1>"; 
                    ?>
                    </div>
                </div>
            </section>

            <div class="fade_rule wow fadeIn"></div>
            <br><br>

            <!-- Booking form -->
            <div class="container">
              <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-11">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-10 order-2 order-lg-1">
                        <form action="ticket.php" method="post">
                            <?php 

                                // Connection with db
                                $conn = mysqli_connect("localhost", "HNCWEBMR19", "rAhXexAcqr", "HNCWEBMR19")
                                or die("Cannot connect to database");

                                // variables
                                $sql = "SELECT DISTINCT title FROM llc_movies";
                                $result = mysqli_query($conn, $sql);
                                $i = 1;
                                
                                echo ("<div class='row align-items-center pt-4 pb-3 ps-1 pe-4 wow fadeIn'>");
                                    echo ("<div class='col-md-3 ps-5'>");
                                        echo ("<label class='form-label mb-0' for='title' style='color:#eaeeff; font-family:poppins; font-size: 15px;'><h5>Select movie:</h5></label>");
                                    echo ("</div>");
                                    echo("<select name='title' class='col-md-9 pe-5'>");
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo("<option value='" . $row['title'] . "'>" . $row['title'] . "</option>");
                                        }
                                    echo("</select>");
                                echo ("</div>");
                                echo("<br>");

                                // loop to create potential number of tickets
                                echo ("<div class='row align-items-center pt-4 pb-3 ps-1 pe-4 wow fadeIn'>");
                                    echo ("<div class='col-md-3 ps-5'>");
                                        echo ("<label class='form-label mb-0' for='tickets' style='color:#eaeeff; font-family:poppins; font-size: 15px;'><h5>Select number of tickets:</h5></label>");
                                    echo ("</div>");
                                    echo("<select name='tickets' class='col-md-9 pe-5'>");
                                        for ($i; $i < 11; $i++) {
                                            echo("<option value='$i'>" . $i . "</option>");
                                        }
                                    echo("</select>");
                                echo ("</div>");
                                echo("<br>");

                            ?>

                            <!-- calendar with choice of date -->
                            <div class="row align-items-center pt-4 pb-3 ps-1 pe-4 wow fadeIn">
                                <div class="col-md-3 ps-5">
                                    <label for="date" class="form-label mb-0"><h5>Select date:</h5></label>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <div class="input-group date">
                                        <?php
                                            echo"<input type='date' name='date' class='form-control form-control-lg' id='datepicker'>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 pt-4 wow fadeIn">
                                <label for="GO"></label>
                                <input type="submit" name="go" value="Submit" />
                            </div>
                        </form>
                        </div>
                    </div>
                    </div> 
                </div> 
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
                <?php
                    }
                else {
                    echo "<h3 class='text-center' style='color:red;size:30px'>You are not allowed access here</h3>";
                    header( "Refresh:3; url=http://webdev.edinburghcollege.ac.uk/~HNCWEBMR19/llc/loginform.php", true, 303);
                }
                ?>

                <script>
                    new WOW().init();
                </script>

    </body>
</html>