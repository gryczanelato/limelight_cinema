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
                      <a class="nav-link active" href="contactus.php">Contact Us</a>
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
                        <h1 id="faq" class="fw-regular">Need help?</h1>
                    </div>
                </div>
            </section>

            <div class="fade_rule wow fadeIn"></div>
            <br><br>

            <section class="py-2 text-center container">

                <div class="row py-lg-3 gx-0 mb-2 mb-lg-3 align-items-center wow fadeInUp">
                    <div>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>

                <div class="row py-lg-3 gx-0 mb-4 mb-lg-5 align-items-center wow fadeInUp">
                    <div>
                        <h3>Why do I need an account to book tickets?</h3>
                        <h4 class="text-50 mb-0">This is a customer protection secured by LimeLight Cinema policy that only adult users are able 
                            to book tickets for our venues. By having an account you are confirming your date of birth.</h4>
                    </div>
                </div>

                <div class="row py-lg-3 gx-0 mb-4 mb-lg-5 align-items-center wow fadeInUp">
                    <div>
                        <h3>I can't log in to my account. How can I get help?</h3>
                        <h4 class="text-50 mb-0">If you are unable to log in to your LimeLight Cinema account, please click the "Contact Us" 
                            button below to get in touch with one of our customer service team who will get back to you with in 24 hours 
                            in order to assist you further.</h4>
                    </div>
                </div>

                <div class="row py-lg-3 gx-0 mb-4 mb-lg-5 align-items-center wow fadeInUp">
                    <div>
                        <h3>I can't book tickets through the "Book now" button</h3>
                        <h4 class="text-50 mb-0">If you can't book tickets through the "Book button", make sure you are registered and loged in 
                            user. If that issue is not resolved, please, phone venue of your choice. List of our venues in the area of 
                            Midlothian can be found on Venues tab on top of this page.</h4>
                    </div>
                </div>

                <div class="row py-lg-3 gx-0 mb-4 mb-lg-5 align-items-center wow fadeInUp">
                    <div>
                        <h3>Can I delete my account?</h3>
                        <h4 class="text-50 mb-0">If you want to exercise any of your data protection rights, please see "Contact us" form below.  
                            To process a request from you, we will need to confirm your identity to ensure we're accessing the right data.</h4>
                    </div>
                </div>

                <div class="row py-lg-3 gx-0 mb-4 mb-lg-5 align-items-center wow fadeInUp">
                    <div>
                        <h3>Age restrictions and acceptable forms od ID?</h3>
                        <h4 class="text-50 mb-0">A person must be of at least 8 years of age to attend one of our venues by themselves. If 
                            they are under this age, they will require accompaniment by a parent or guardian over the age of 18. If  any 
                            member of the LimeLight Cinema crew think you might be younger than the film's classification they may ask to see your ID. 
                            We accept official photographic ID, including passport, driving licence or a proof of age card (which can be 
                            obtained from Validate UK Pass Scheme Young Scott). If you have not been allowed into the venue due to 
                            insufficient ID - please speak with a member of the team who will arrange for you to get a refund.</h4>
                    </div>
                </div>
            </section>

            <section class="py-5 text-center container wow fadeInLeft">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 id="contact_form" class="fw-regular">Still didn't find answer?</h1>
                    </div>
                </div>
            </section>

            <div class="fade_rule wow fadeIn"></div>
            <br><br>

            <section class="contact-form"> 
                <div class="container py-4">
                    <form id="contactForm" action="https://formsubmit.co/a94c996815c7353f6e2a618e608a6fc0" name="message" method="POST" action="">
                        <div class="name-email row gx-0 mb-3 mb-lg-5 align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-5 py-3 wow fadeIn">
                                <label class="form-label ms-3" for="name"><h5>Name</h5></label>
                                <input class="form-control" id="name" name="name" type="text"/>
                            </div>
                        
                            <div class="col-xl-5 col-lg-5 py-3 wow fadeIn">
                                <label class="form-label ms-3" for="email"><h5>Email Address</h5></label>
                                <input class="form-control" id="email" name="email" type="email"/>
                            </div>
                        </div>
                        <div class="message mb-3 wow fadeIn">
                            <label class="form-label ms-3" for="message"><h5>Message</h5></label>
                            <input class="form-control" id="message" name="message" type="text" style="height: 100px;"/>
                        </div>
                    
                        <div class="py-4 d-flex justify-content-center wow fadeIn">
                            <a href="contactus.php#contact_form"><input class="px-2" type="submit" value="Send" name="send_btn"/></a>
                        </div>
                
                    </form>
                </div>
            </section>
        </main>

        <footer class="pb-3 mb-4 wow fadeIn">
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