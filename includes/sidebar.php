<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Search</h4>
        <form class="" action="search.php" method="post">


        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                <button name="submit" class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
      </form> <!--search-->
        <!-- /.input-group -->
    </div>




    <!-- Blog Categories Well -->
    <div class="well">
<?php

$query = "SELECT * FROM blogs";
$select_posts_sidebar = mysqli_query($connection, $query);

 ?>

        <h4>Previous Posts</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                  <?php
                      while($row = mysqli_fetch_assoc($select_posts_sidebar)){

                          $b_title = $row['title'];
                          echo "<li><a href='#'>{$b_title}</a></li>";
                      }
                   ?>
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Recent Activity</h4>
        <a class="twitter-timeline" href="https://twitter.com/nwufm1055">Tweets by nwufm1055</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

</div>

</div>
<!-- /.row -->

<hr>
