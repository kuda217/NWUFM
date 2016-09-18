<?php include "includes/admin_header.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    Admin Login
                    <small></small>
                </h1>
              <div class="col-xs-6">
                <div class="col-xs-6">
                  <?php

                  if(isset($_POST['submit'])){

                  $name = $_POST['name'];
                  $password = $_POST['password'];


                  $name = mysqli_real_escape_string($connection, $name);
                  $password = mysqli_real_escape_string($connection, $password);


                  if (empty($name) || empty($password)){

                    echo "Please complete all fields.";
                  }else{

                    $hashFormat = "$2y$12$";
                    $salt = "youshallnotpassyoudixk";
                    $hF_and_salt = $hashFormat . $salt;
                    $password = crypt($password, $hF_and_salt);

                      $query = "INSERT INTO `users` (user_id, name, password, first_name, last_name, email, active) VALUES('', '{$name}', '{$password}', '{$fname}', '{$lname}', '{$email}', '')";

                      $check_user = mysqli_query($connection, $query);

                      if(!$check_user){

                        die('QUERY FAILED ' . mysqli_error($connection));

                      }else{
                          index.php;
                      }

                    }

                  }



                   ?>

                  <form class="" action="" method="post">
                    <div class="form-group">
                      <label for="name">User Name</label>
                      <input type="text" class="form-control"name="name" value="">
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control"name="password" value="">
                    </div>

                    <div class="form-group">
                      <input class="btn btn-success"type="submit" name="submit" value="Log In">
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
