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
                            Add New Blog Post
                            <small></small>
                        </h1>
                      <div class="col-xs-6">
                        <div class="col-xs-6">
                          <?php

                          if(isset($_POST['submit'])){

                          $blog_title = $_POST['title'];
                          $blog_author = $_POST['author'];
                          $blog_date = $_POST['date'];
                          $blog_image = $_POST['image'];
                          $blog_content = $_POST['content'];
                          $blog_tags = $_POST['tags'];
                          $blog_id;
                          $comment_count;
                          $status;

                          if (empty($blog_title) || empty($blog_author) || empty($blog_date) || empty($blog_content) || empty($blog_tags)){

                            echo "Please complete all fields before submitting the blog. (Image is optional)";
                          } else {

                              $query = "INSERT INTO `blogs` (blog_id, title, author, `date`, image, content, tags, comment_count, status) VALUES('', '{$blog_title}', '{$blog_author}', '{$blog_date}', '{$blog_image}', '{$blog_content}', '{$blog_tags}', '', '')";

                              $add_blog = mysqli_query($connection, $query);

                              if(!$add_blog){

                                die('QUERY FAILED ' . mysqli_error($connection));

                              }

                            }

                          }



                           ?>

                          <form class="" action="" method="post">
                            <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control"name="title" value="">
                            </div>

                            <div class="form-group">
                              <label for="author">Author</label>
                              <input type="text" class="form-control"name="author" value="">
                            </div>

                            <div class="form-group">
                              <label for="date">Date</label>
                              <input type="text" class="form-control"name="date" value="">
                            </div>

                            <div class="form-group">
                              <label for="image">Image</label>
                              <input type="text" class="form-control"name="image" value="">
                            </div>

                            <div class="form-group">
                              <label for="content">Content</label>
                              <input type="text" class="form-control"name="content" value="">
                            </div>

                            <div class="form-group">
                              <label for="tags">Tags</label>
                              <input type="text" class="form-control"name="tags" value="">
                            </div>

                            <div class="form-group">
                              <input class="btn btn-info"type="submit" name="submit" value="Add Blog">
                            </div>

                          </form>
                        </div>


                    </div>
                    <div class="col-xs-6">
                      <?php

                      $query = "SELECT * FROM blogs";
                      $select_posts = mysqli_query($connection, $query);

                       ?>

                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Blog Title</th>
                          <th>Author</th>
                          <th>Date Created</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                            while($row = mysqli_fetch_assoc($select_posts)){

                                $b_title = $row['title'];
                                $b_author = $row['author'];
                                $b_date = $row['date'];

                                echo "<tr>";
                                echo "<td>{$b_title}</td>";
                                echo "<td>{$b_author}</td>";
                                echo "<td>{$b_date}</td>";
                                echo "</tr>";
                            }
                         ?>
                      </tbody>
                    </table>

                    </div>
                  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php"; ?>
