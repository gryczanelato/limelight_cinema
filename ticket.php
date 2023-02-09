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
                    echo"<h1 class='fw-regular'>Your ticket</h1>"; 
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

                    <?php 
                        // connection to db
                        $conn = mysqli_connect("localhost", "HNCWEBMR19", "rAhXexAcqr", "HNCWEBMR19")
                        or die("Cannot connect to database");

                        // variables
                        $title = $_POST['title'];
                        $t_no = $_POST['tickets'];
                        $date = $_POST['date'];

                        // query to db
                        $sql = "SELECT stock FROM llc_movies WHERE title = '$title'";
                        $result = mysqli_query($conn, $sql);

                        // check if number of tickets exist in db, update stock, otherwise say to user there's not enough tickets
                        if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            if ($row['stock'] >= $t_no){
                            $new_stock = $row['stock'] - $t_no;
                            $new_sql = "UPDATE llc_movies SET stock='$new_stock' WHERE title='$title'";
                            $result2 = mysqli_query($conn, $new_sql);
                            echo"<div class='py-lg-6'>";
                                echo "<div class='col-lg-6 col-md-6 mx-auto pb-5'>";
                                    echo "<h2>You booked:</h2><h4>" . $title . "</h4><br><h2>Number of tickets:</h2><h4>" . $t_no . "</h4><br><h2>Date:</h2><h4>" . $date . "</h4><br><br>";
                                    echo "<button onclick='window.print()'>Print this page</button>";
                                echo "</div>";
                            echo "</div>";
                            }
                            else {
                                echo"<div class='py-lg-6'>";
                                    echo "<div class='col-lg-6 col-md-8 mx-auto pb-5'>";
                                        echo "<h2>There's not enough tickets for this movie.</h2>";
                                    echo "</div>";
                                echo "</div>";
                                }
                        }

                    ?>
                    </div>
                    </div>
                    </div> 
                </div> 
            </div>

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