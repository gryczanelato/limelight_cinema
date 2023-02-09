<?php

            //making connection with db
            $conn = mysqli_connect("localhost", "HNCWEBMR19", "rAhXexAcqr", "HNCWEBMR19")
            or die("Cannot connect to database");

            if(isset($_POST['submit_btn'])){

              //set variables
              $username = $_POST["username"];
              $password = $_POST["password"];

              //create query to checl user input against database enteries
              $sql = "SELECT * FROM llc_users WHERE username='$username' AND password='$password'";
              $result = mysqli_query($conn, $sql);

              //counting rows by sql
              $count = mysqli_num_rows($result);

              //if result matched $username, then table row must be 1
              
              if ($count==1) {

                while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                $user_dob = $row['dob'];
                }

                list($year, $month, $day) = explode("-", $user_dob);
                $birthday = mktime(0, 0, 0, $month, $day, $year);
                $difference = time() - $birthday;
                $age = floor($difference / 31556926);

                if($age >= 18){
                  session_start();
                  $_SESSION['adultlogin'] = "adult";
                  header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR19/llc/index.php");
                }
                else {
                  session_start();
                  $_SESSION['kidslogin'] = "kids";
                  header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR19/llc/home_kids.php");
                }
                  
                }

              else {
                  echo("<h5 class='py-5 text-center' style='color:red'>" . "Incorrect username or password." . "</h5>");
              }
            }
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
                      <a class="nav-link" href="loginform.php"><button>Login</button></a>
                    </li>
                  </ul>
                </div>
              </div>
          </nav>
          <div class="text-center wow fadeIn">
            <img class="d-block mx-auto" style="width: 100%" src="images/log_reg.jpeg" alt="Cinema login">
          </div>  
        </header>

        <main>
          <section class="py-5 text-center container wow fadeInLeft">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 id="login" class="fw-regular">Login form</h1>
                </div>
            </div>
          </section>

          <div class="fade_rule wow fadeIn"></div>
          <br><br>

          <section class="pb-5 text-center container wow fadeIn">
            <div class="nav col d-flex justify-content-center my-2 mx-auto" id="navLogRegButtons">
              <ul class="nav justify-content-center pb-3 my-2 mx-auto">
                <li class="nav-item-lr">
                    <a class="nav-link-lr px-2" href="loginform.php#login"><button class="nav-button" style="background-color:#ffcf67;">Login</button></a>
                </li>
                <li class="nav-item-lr active">
                  <a class="nav-link-lr" href="registerform.php#register"><button class="nav-button">Register</button></a>
                </li>
              </ul>
            </div>
          </section>

          
          <section>
            <div class="container">
              <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-11">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-10 order-2 order-lg-1">
                      <form class="form-group mx-1 mx-md-1" name="register" method="POST">

                        <div class="row align-items-center pt-4 pb-3 wow fadeIn">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="username" style="color:#eaeeff; font-family:poppins; font-size: 15px;">Username: </label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3 wow fadeIn">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="password" style="color:#eaeeff; font-family:poppins; font-size: 15px;">Password: </label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 pt-4 wow fadeIn">
                          <input class="px-2" type="submit" value="Login" name="submit_btn">
                        </div>

                        <div class="card-body d-flex justify-content-center wow fadeIn">
                            <a href="loginform_admin.php"><button type="button" class="btn btn-outline-light">Admin?</button></a>
                        </div>

                      </form>
                    </div>
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

        <script>
            new WOW().init();
        </script>
    </body>
</html>