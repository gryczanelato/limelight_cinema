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
            <img class="d-block mx-auto" style="width: 100%" src="images/log_reg.jpeg" alt="Cinema register form">
          </div>  
        </header>

        <main>
          <section class="py-5 text-center container wow fadeInLeft">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 id="register" class="fw-regular">Register form</h1>
                </div>
            </div>
          </section>

          <div class="fade_rule wow fadeIn"></div>
          <br><br>

          <section class="pb-5 text-center container wow fadeIn">
            <div class="nav col d-flex justify-content-center my-2 mx-auto" id="navLogRegButtons">
              <ul class="nav justify-content-center pb-3 my-2 mx-auto">
                <li class="nav-item-lr">
                    <a class="nav-link-lr px-2" href="loginform.php#login"><button class="nav-button">Login</button></a>
                </li>
                <li class="nav-item-lr active">
                  <a class="nav-link-lr" href="registerform.php#register"><button class="nav-button" style="background-color:#ffcf67;">Register</button></a>
                </li>
              </ul>
            </div>
          </section>

          <?php

            //making connection with db
            $conn = mysqli_connect("localhost", "HNCWEBMR19", "rAhXexAcqr", "HNCWEBMR19")
            or die("Cannot connect to database");
            
            if(isset($_POST['submit_btn'])){

              //set variables
              $username = $_POST["username"];
              $email = $_POST["email"];
              $dob = $_POST["dob"];
              $password = $_POST["password"];
              $c_password = $_POST["c-password"];
			  
			        // echo("Passed data is: ". $username. "<br>" . $email . "<br>" . $dob . "<br>" . $password);

              //insert data provided by user into table
              $reg = mysqli_query($conn, "SELECT * FROM llc_users WHERE username='$username'");
              
              //check if the data has been inserted previously to the db
              if(mysqli_num_rows($reg) > 0) {
                echo("<h5 class='py-5 text-center' style='color:red'>" . "Username already exists" . "</h5>");
              } 

              elseif($password != $c_password) {
                echo("<h5 class='py-5 text-center' style='color:red'>" . "Passwords do not match" . "</h5>");
                }

              else {
				        echo("<h5 class='py-5 text-center'>" . "Passed data is: " . "<br>" . $username . "<br>" . $email . "<br>" . $dob . "<br>" . $password . "<br>" . "</h5>");
                mysqli_query ($conn, "INSERT INTO llc_users (username, email, dob, password) VALUES ('$username', '$email', '$dob' ,'$password')");
                echo("<h5 class='text-center'>" . "Data has been inserted into table - user is registered" . "</h5>");
            }}

          ?>


          <section>
            <div class="container">
              <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-11">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-10 order-2 order-lg-1">
                      <form class="form-group mx-1 mx-md-1" name="register" method="POST" action="">

                        <div class="row align-items-center pt-4 pb-3 wow fadeIn">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="username"><h5>Username:</h5></label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3 wow fadeIn">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="email"><h5>Email address: </h5></label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3 ps-1 pe-4 wow fadeIn">
                          <div class="col-md-3 ps-5">
                            <label for="dob" class="form-label mb-0"><h5>Date of birth:</h5></label>
                          </div>
                          <div class="col-md-9 pe-4">
                            <div class="input-group date">
                            <?php
                                echo"<input type='date' name='dob' class='form-control form-control-lg' id='datepicker' value='" . date('Y-m-d',strtotime($data["congestart"])) . "'>";
                              ?>
                            </div>
                          </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3 wow fadeIn">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="password" ><h5>Password:</h5></label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3 wow fadeIn">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="c-password"><h5>Confirm password:</h5></label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <input type="password" id="c-password" name="c-password" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-5 wow fadeIn">
                          <input class="form-check-input me-2" type="checkbox" value="" id="consent" />
                          <label class="form-check-label" for="fconsent" style="color:#eaeeff; font-family:poppins; font-size: 15px;">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 wow fadeIn">
						              <input class="px-2" type="submit" value="Submit" name="submit_btn"/>
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