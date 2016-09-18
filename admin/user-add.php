<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

    <?php //if($connection) echo "yes"; ?>

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add New User
                            <small></small>
                        </h1>
                      <div class="col-xs-6">
                        <div class="col-xs-6">
                          <?php

                          if(isset($_POST['submit'])){

                          $name = $_POST['name'];
                          $password = $_POST['password'];
                          $pwdverify = $_POST['pwdverify'];
                          $fname = $_POST['first_name'];
                          $lname = $_POST['last_name'];
                          $email = $_POST['email'];
                          $user_id;
                          $active;

                          $name = mysqli_real_escape_string($connection, $name);
                          $password = mysqli_real_escape_string($connection, $password);
                          $pwdverify = mysqli_real_escape_string($connection, $pwdverify);
                          $fname = mysqli_real_escape_string($connection, $fname);
                          $lname = mysqli_real_escape_string($connection, $lname);


                          if (empty($name) || empty($password) || empty($pwdverify) || empty($fname) || empty($lname) || empty($email)){

                            echo "Please complete all fields.";
                          } elseif($password != $pwdverify){

                                echo "Passwords do not match.";



                          }elseif(strlen($password) < 6){

                            echo "Password is too short";

                          }
                          else{

                            $hashFormat = "$2y$12$";
                            $salt = "youshallnotpassyoudixk";
                            $hF_and_salt = $hashFormat . $salt;
                            $password = crypt($password, $hF_and_salt);

                              $query = "INSERT INTO `users` (user_id, name, password, first_name, last_name, email, active) VALUES('', '{$name}', '{$password}', '{$fname}', '{$lname}', '{$email}', '')";

                              $add_user = mysqli_query($connection, $query);

                              if(!$add_user){

                                die('QUERY FAILED ' . mysqli_error($connection));

                              }else{
                                  echo "User successfully created.";
                              }

                            }

                          }



                           ?>

                          <form class="" action="" method="post">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control"name="name" value="">
                            </div>

                            <div class="form-group">
                              <label for="fname">First Name</label>
                              <input type="text" class="form-control"name="first_name" value="">
                            </div>

                            <div class="form-group">
                              <label for="lname">Last Name</label>
                              <input type="text" class="form-control"name="last_name" value="">
                            </div>

                            <div class="form-group">
                              <label for="email">Email Address</label>
                              <input type="email" class="form-control"name="email" value="">
                            </div>

                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control"name="password" value="">
                            </div>

                            <div class="form-group">
                              <label for="pwdverify">Verify Password</label>
                              <input type="password" class="form-control"name="pwdverify" value="">
                            </div>

                            <div class="form-group">
                              <input class="btn btn-success"type="submit" name="submit" value="Create User">
                            </div>

                          </form>
                        </div>


                    </div>

                  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php"; ?>
