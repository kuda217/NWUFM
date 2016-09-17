<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">NWUFM Administrator Access</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> USER <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="index.php"><i class="fa fa-fw fa-home"></i> Home </a>
            </li>
            <li>
                <a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard </a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#blogs-manage"><i class="fa fa-pencil fa-fw"></i> Blog Management<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="blogs-manage" class="collapse">
                    <li>
                        <a href="blog-add.php"> Add New Blog Post</a>
                    </li>
                    <li>
                        <a href="blog-manage.php">Edit Existing Blog Posts</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-user"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users" class="collapse">
                    <li>
                        <a href="user-add.php">Add New User</a>
                    </li>
                    <li>
                        <a href="#">Manage Existing Users</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-play-circle"></i> Live Stream </a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
            </li>
            <li>
                <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Stuff</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Competitions <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="#">Competition 1</a>
                    </li>
                    <li>
                        <a href="#">Competition 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
