<?php
include("../pack/include/data.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atieh - Profile</title>
    <link href="../../pack/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../pack/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../pack/css/datepicker3.css" rel="stylesheet">
    <link href="../../pack/css/styles.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../">Atieh Institute</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" href="../../account/logout.php">
                        <em class="fa fa-sign-out"></em>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="../pack/pic.jpeg" class="img-responsive" alt="User Image">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $username; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Student</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class=""><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class=""><a href="class.php"><em class="fa fa-home">&nbsp;</em> Class</a></li>
        <li class=""><a href="payment.php"><em class="fa fa-credit-card-alt">&nbsp;</em> Payment</a></li>
        <li class="active"><a href="profile.php"><em class="fa fa-id-card">&nbsp;</em> Profile</a></li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../student">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Profile</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>
    </div>
    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-money color-blue"></em>
                        <div class="large"><?php echo $payment; ?></div>
                        <br>
                        <div class="text-muted">Payment Status</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-clock-o color-orange"></em>
                        <div class="large"><?php echo $start; ?></div>
                        <br>
                        <div class="text-muted">Start Time</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-book color-teal"></em>
                        <div class="large"><?php echo $level; ?></div>
                        <br>
                        <div class="text-muted">Level</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-user color-red"></em>
                        <div class="large"><?php echo $teacher; ?></div>
                        <br>
                        <div class="text-muted">Teacher</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My Information
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-info">Personal Information</h1>
                    <hr>
                    <h4 class="text-primary">My name</h4>
                    <p class="text-success"><b><i class="fa fa-user"></i> <?php echo $fullname; ?></b></p>
                    <br>
                    <h4 class="text-primary">My Phone</h4>
                    <p class="text-success"><b><i class="fa fa-mobile"></i> <?php echo $phone; ?></b></p>
                    <br>
                    <h4 class="text-primary">My Email</h4>
                    <p class="text-success"><b><i class="fa fa-envelope"></i> <?php echo $email; ?></b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Contact With Me
                    <span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>
                </div>
                <div class="panel-body">
                    <h1 class="text-info">Contact</h1>
                    <hr>
                    <h4 class="text-primary">Parent Phone Number</h4>
                    <p class="text-success"><b><i class="fa fa-phone"></i> <?php echo $parent; ?></b></p>
                    <br>
                    <h4 class="text-primary">Home Phone</h4>
                    <p class="text-success"><b><i class="fa fa-home"></i> <?php echo $home; ?></b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="back-link"><a href="http://<?php echo $ip; ?>/Narbon">Atieh Institute</a></p>
            <p class="back-link">Created by <a href="https://BlackIQ.ir">Amirhossein Mohammadi</a></p>
            <p class="back-link">Powered By <a href="https://Neotrinost.ir">Neotrinost</a> <i class="fa fa-copyright"></i> <?php echo date("Y"); ?></p>
            <p class="back-link">
                <i class="fa fa-lg fa-linkedin-square text-info"></i>
                <i class="fa fa-lg fa-github"></i>
                <i class="fa fa-lg fa-telegram text-primary"></i>
                <i class="fa fa-lg fa-instagram text-danger"></i>
            </p>
        </div>
    </div>
</div>
<script src="../../pack/js/jquery-1.11.1.min.js"></script>
<script src="../../pack/js/bootstrap.min.js"></script>
<script src="../../pack/js/chart.min.js"></script>
<script src="../../pack/js/chart-data.js"></script>
<script src="../../pack/js/easypiechart.js"></script>
<script src="../../pack/js/easypiechart-data.js"></script>
<script src="../../pack/js/bootstrap-datepicker.js"></script>
<script src="../../pack/js/custom.js"></script>
</body>
</html>