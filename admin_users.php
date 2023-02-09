<?php
session_start();
if(isset($_SESSION['adminlogin']))
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="lib/wow/wow.min.js"></script>
      <link rel="stylesheet" type="text/css" href="style_admin.css">
  
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
                        <a class="nav-link" href="index.php">Adult website</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="home_kids.php">Kids website</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php"><button>Logout</button></a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header>

        <section class="py-5 text-center container wow fadeIn">
            <div class="row pt-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                  <?php
                  echo"
                    <h1 class='fw-regular'>Admin Panel</h1>"; 
                  ?>
                </div>
            </div>
        </section>
        
        <section class="pb-5 text-center container wow fadeIn">
            <div class="nav col d-flex justify-content-center my-2 mx-auto" id="navLogRegButtons">
            <ul class="nav justify-content-center pb-3 my-2 mx-auto">
                <li class="nav-item-lr">
                    <a class="nav-link-lr px-2" href="#"><button class="nav-button" style="background-color:#ffcf67;">Users</button></a>
                </li>
                <li class="nav-item-lr">
                  <a class="nav-link-lr" href="admin_movie.php"><button class="nav-button">Movies</button></a>
                </li>
            </ul>
            </div>
        </section>

        <main>

            <?php
            //function with query to create update button
            if(isset($_POST['update'])) {
              $updateQuery = "UPDATE llc_users SET username='$_POST[username]', email='$_POST[email]', dob='$_POST[dob]', password='$_POST[password]' WHERE id='$_POST[id]'";
              mysqli_query($conn, $updateQuery);
            }

            //function with query to create delete button
            if(isset($_POST['delete'])) {
                $deleteQuery = "DELETE FROM llc_users WHERE id='$_POST[id]'";
                mysqli_query($conn, $deleteQuery);
            }
            //function with query to create add form
            if(isset($_POST['add'])) {
              $username = $_POST['username'];
              $email = $_POST['email'];
              $dob = $_POST['dob'];
              $password = $_POST['password'];

              $insertQuery = "INSERT INTO llc_users (username, email, dob, password) VALUES ('$username', '$email', '$dob', '$password')";
              mysqli_query($conn, $insertQuery);
            }

            //variable that shows the content of the database table in the html table
            $result = mysqli_query($conn, "SELECT * FROM llc_users");
            ?>

            <div class="container-fluid px-4 pb-3 wow fadeIn" style="overflow-x:auto;">
                <div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Username</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">DoB</th>
                                  <th scope="col">Password</th>
                                  <th scope="col">Action</th>
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "<form action='admin_users.php' method='post'>";
                                    echo "<tr>";
                                    echo "<td><input name='id' value ='" . $row['id'] . "' ></td>";
                                    echo "<td><input type='text' name='username' value ='" . $row['username'] . "' ></td>";
                                    echo "<td><input type='text' name='email' value ='" . $row['email'] . "' ></td>";
                                    echo "<td><input type='text' name='dob' value ='" . $row['dob'] . "' ></td>";
                                    echo "<td><input type='text' name='password' value ='" . $row['password'] . "' ></td>";
                                    echo "<td><input type='submit' name='update' value ='update' ></td>";
                                    echo "<td><input type='submit' name='delete' value ='delete' ></td>";
                                    echo "</tr>";
                                    echo "</form>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <section class="pb-5 text-center container wow fadeIn">
            <div class="row pt-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h2 class="fw-regular">Add user</h2>
                </div>
            </div>
        </section>

        
        <section class="add-users py-5 wow fadeIn">
            <div class="container">
              <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-11">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-10 order-2 order-lg-1">
                      <?php
                      echo"<form class='form-group mx-1 mx-md-1' name='add' method='post' action='admin_users.php'>";
                      ?>

                        <div class="row align-items-center pt-4 pb-3">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="username"><h5>Username:</h5></label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <?php
                            echo"<input type='text' id='username' name='username' class='form-control form-control-lg' />";
                            ?>
                            </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="email"><h5>Email:</h5></label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <?php
                            echo"<input type='email' id='email' name='email' class='form-control form-control-lg' />";
                            ?>
                          </div>
                        </div>

                        <div class="row align-items-center pt-4 pb-3 ps-1 pe-4">
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

                        <div class="row align-items-center pt-4 pb-3">
                          <div class="col-md-3 ps-5">
                            <label class="form-label mb-0" for="password"><h5>Password:</h5></label>
                          </div>
                          <div class="col-md-9 pe-5">
                            <?php
                            echo"<input type='text' id='password' name='password' class='form-control form-control-lg' />";
                            ?>
                          </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <?php
						              echo"<input class='px-2' type='submit' value='Submit' name='add'/>";
                          ?>
                        </div>

                      <?php
                      echo "</form>";
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <footer>
            <p class="text-center text-muted wow fadeIn">© 2022 Kamila Maciejczak, EC2047353</p>
        </footer>

        <?php
        }
          else {
            echo "<h3 class='text-center' style='color:red;size:30px'>You are not allowed access here</h3>";
            header( "Refresh:3; url=http://webdev.edinburghcollege.ac.uk/~HNCWEBMR19/llc/loginform_admin.php", true, 303);
          }
        ?>

        <script>
            new WOW().init();
        </script>
    </body>
</html>