<?php
include('php/DBconn.php');
$phiID = "";
$firstname ="";
$lastname = "";
$nic = "";
$workarea="";
$telephone = "";
$email = "";
$password = "";
if($_POST && array_key_exists("action", $_POST)){

    // CARRY OUT SANITIZATION AND DATA VALIDATION HERE!!!!!!!!!

    // CARRY OUT RELAVANT ACTION
    switch($_POST['action'])
    {
        case "search":
            $phiID = $_POST['phiID'];
            $sql = "SELECT * FROM `phi` WHERE phiNumber='$phiID'";
            $result = mysqli_query($connection,$sql);
            $res=mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)){
                $firstname = $row['name'];
                $lastname =  $row['lastName'];
                $telephone = $row['phone'];
                $phiID = $_POST['phiID'];
                $nic  =$row['nic'];
                $workarea =  $row['Colony'];
                $email = $row['email'];
                $password = $row['password'];
            }

            if ($res<1){
                echo "<script>alert('PHI not found for Given ID')</script>";
            }
            //echo "<script>alert('Search Function')</script>";

            break;

    }
}
else {
    $phiID = "";
    $firstname ="";
    $lastname = "";
    $nic = "";
    $workarea="";
    $telephone = "";
    $email = "";
    $password = "";
}

?>



<!doctype html>

<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Covid-19 - Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>



    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="admin.dashboard.html"><img src="../img/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="admin.dashboard.html"><img src="../img/logo.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin.dashboard.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        <a href="../index.php"> <i class="menu-icon fa fa-home"></i>Back to Login </a>

                    </li>

                    <h3 class="menu-title">Page Roles</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-stethoscope"></i>Doctor</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="admin.movie.php">Add</a></li>
                            <li><i class="fa fa-wrench"></i><a href="admin.movie.php">Update</a></li>
                            <li><i class="fa fa-search"></i><a href="admin.movie.php">Search</a></li>
                            <li><i class="fa fa-trash"></i><a href="admin.movie.php">Make Inactive</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-medkit"></i>PHI</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-search"></i><a href="admin.user.php"> Add</a></li>
                            <li><i class="fa fa-trash"></i><a href="admin.user.php"> Update</a></li>
                            <li><i class="fa fa-trash"></i><a href="admin.user.php"> Search</a></li>
                            <li><i class="fa fa-trash"></i><a href="admin.user.php"> Make Inactive</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-hospital-o"></i>MOH</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-wrench"></i><a href="admin.theatre.php">Add</a></li>
                            <li><i class="menu-icon fa fa-search"></i><a href="admin.theatre.php">Update</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="admin.theatre.php">Search</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="admin.theatre.php">Make Inactive</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-user-circle"></i>Admin</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="admin.snacks.php"> Add</a></li>
                            <li><i class="fa fa-wrench"></i><a href="admin.snacks.php"> Update</a></li>
                            <li><i class="fa fa-search"></i><a href="admin.snacks.php"> Search</a></li>
                            <li><i class="fa fa-trash"></i><a href="admin.snacks.php"> Make Inactive</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Data Comings</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="admin.basicTable.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="admin.dataTable.html">Data Table</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Covid-19</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Covid-19</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Covid-19</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Platform Notifications</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Your Google Developers Console project is scheduled for deletion</p>
                                    </span>
                                </a>
                                <hr>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Pinterest </span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>You've got 18 new ideas waiting for you!</p>
                                    </span>
                                </a>
                                <hr>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">Firebase</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>[Firebase] Welcome to Firebase!</p>
                                    </span>
                                </a>
                                <hr>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <span class="message media-body">
                                        <span class="name float-left">
                                            Evernote Team</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>
                                            Bigger notes. Better results.</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../img/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
                            aria-expanded="true">
                            <i class="flag-icon flag-icon-lk"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">PHI Updates</li>
                            <li><a href="admin.dashboard.html">Dashboard</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="row">
                <div class="col-lg-3"></div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>PHI</strong> Updates
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" name="phiForm" id="phiForm" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">PHI ID </label></div>

                                    <div class="col-12 col-md-9"><input type="text" id="userid" name="phiID" value="<?php echo $phiID; ?>"
                                            class="form-control" required></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">First
                                            Name </label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="firstname" name="firstName" value="<?php echo $firstname; ?>"
                                            class="form-control" required></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last
                                            Name </label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="lastname" name="lastName" value="<?php echo $lastname; ?>"
                                            class="form-control" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">NIC
                                            Number
                                        </label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nic" name="nic" value="<?php echo $nic; ?>"
                                            class="form-control" required minlength="10" maxlength="12"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email
                                            Input</label></div>
                                    <div class="col-12 col-md-9"><input type="email" id="email" name="email" value="<?php echo $email; ?>"
                                            class="form-control" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="email-input"
                                            class=" form-control-label">Working Area
                                        </label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="work" name="workArea" value="<?php echo $workarea; ?>"
                                            class="form-control" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mobile
                                        </label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="mobile" name="telephone" value="<?php echo $telephone; ?>"
                                            class="form-control" required></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="password-input"
                                            class=" form-control-label">Password</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="password" value="<?php echo $password; ?>"
                                            name="password" class="form-control" required>
                                        <small class="help-block form-text">Please enter a complex password</small>
                                    </div>
                                </div>
                                <input type="hidden" id="action" name="action"  value="" />
                                <div class="card-footer">
                                    <button type="button" name="searchbyName" id="myButton" formaction='admin.user.php' class="btn btn-primary btn-sm" onclick="performAction('search');">
                                        <i class="fa fa-search"></i> By Name
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-sm" name="insertPHI" formaction='php/insertPhi.php' onclick="AddUser()">
                                        <i class="fa fa-plus"></i> Add
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-sm" name="phiUpdate" formaction='php/insertPhi.php' onclick="UpdateUser()">
                                        <i class="fa fa-wrench"></i> Update
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-sm" name="phiDelete" formaction='php/insertPhi.php' onclick="return checkDelete();">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="ClearFields();">
                                        <i class="fas fa-eraser"></i> Clear Fields
                                    </button>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-3"></div>
                </div>


            </div>
        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


        <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <script>
            (function ($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>

        <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: "AIzaSyA6swDC9X6ngehYczHLzxsk_Pck-b20ikY",
                authDomain: "nathan-james-web.firebaseapp.com",
                databaseURL: "https://nathan-james-web.firebaseio.com",
                projectId: "nathan-james-web",
                storageBucket: "nathan-james-web.appspot.com",
                messagingSenderId: "429172932466"
            };
            firebase.initializeApp(config);
        </script>

        <script type="text/javascript">
            function performAction(action)
            {
                // ASSIGN THE ACTION
                var action = action;

                // UPDATE THE HIDDEN FIELD
                document.getElementById("action").value = action;

                // SUBMIT THE FORM
                document.phiForm.submit();
            }
        </script>

        <script language="JavaScript" type="text/javascript">
            function checkDelete(){
                return confirm('Are you sure that you want to delete this PHI from Database?');
            }
        </script>

        <script src="admin.user.js"></script>

        <script type="text/javascript">
            function ClearFields()
            {
                //document.getElementById("action").value = action;
                document.getElementById("userid").value = "";
                document.getElementById("firstname").value = "";
                document.getElementById("lastname").value ="";
                document.getElementById("nic").value ="";
                document.getElementById("email").value = ""; //telenumber email password
                document.getElementById("work").value = "";
                document.getElementById("mobile").value = "";
                document.getElementById("password").value = "";
            }
        </script>

</body>

</html>