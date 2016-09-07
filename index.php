<?php

include "includes/header.php";
include "includes/dbcon.php";

 ?>

    <!-- Navigation -->
    <?php
include "includes/navigation.php";
     ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
              <?php
              $query = "SELECT * FROM blogs";
              $select_all_blogs_query = mysqli_query($connection, $query);

              while($row = mysqli_fetch_assoc($select_all_blogs_query)){
                $post_title = $row['title'];
                $post_author = $row['author'];
                $post_date = $row['date'];
                $post_image = $row['image'];
                $post_content = $row['content'];
                $post_tags = $row['tags'];
                $post_comment_count = $row['comment_count'];
                $post_title;
                ?>

                <!-- Blog Post -->

                <!-- Title -->
                <h1>
                  <a href="#"><?php echo $post_title; ?></a>

                </h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $post_author; ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                <hr><a href="#"><?php echo $post_comment_count. " Comments "; ?></hr>

<?php       }     ?>



                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->

                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Let the fun begin
                            <small>September 1, 2016 at 2:30 AM</small>
                        </h4>
                        Sleep is an abstract concept.

                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>
<!-- Footer -->
      <?php
include "includes/footer.php";
       ?>
