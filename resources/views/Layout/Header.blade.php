<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- SITE TITLE -->
    <title>Bornomala - Kindergarten & School HTML Template</title>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-offset="80">

<!-- START PRELOADER -->
<div class="preloader">
    <div class="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->

<!-- START COLOR -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_one"></div>
        </div><!--- END COL -->
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_two"></div>
        </div><!--- END COL -->
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_three"></div>
        </div><!--- END COL -->
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_four"></div>
        </div><!--- END COL -->
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_five"></div>
        </div><!--- END COL -->
        <div class="col-md-2 col-sm-2 col-xs-2 no-padding">
            <div class="color_six"></div>
        </div><!--- END COL -->
    </div><!--- END ROW -->
</div><!--- END CONTAINER -->
<!-- END COLOR -->

<!-- START HEADER -->
<header class="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="top-info-left">
                    <ul>
                        <li><i class="fa fa-phone"></i><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                        <li><i class="fa fa-phone"></i>+(88) 01 123 123 123</li>
                        <li><i class="fa fa-clock-o"></i>Mon to sat Open: 9am - 6pm</li>
                    </ul>
                </div>
            </div><!--- END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="top-info-right">
                    <ul class="list-unstyled">
                        <li><a href="#openModal">Login</a></li>
                        <li>or</li>
                        <li><a href="#openModaltwo">Register</a></li>
                    </ul>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</header>
<!-- START HEADER -->

<!--- START POPUP TAB ONE  -->
<div id="openModal" class="modalbg">
    <div class="dialog">
        <a href="#close" title="Close" class="close">X</a>
        <div class="single_project_popup">
            <div class="login">
                <h4 class="login_register_title">Already a member? Sign in here</h4>
                <div class="form-group">
                    <input type="text" class=" form-control requiredField input-label" placeholder="Username" name="name">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control requiredField input-label" placeholder="Enter Password" name="password" >
                </div>
                <div class="form-group mbnone">
                    <button class="btn btn-popup-bg" type="submit" name="submit">login</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- END POPUP TAB ONE  -->

<!--- START POPUP TAB TWO  -->
<div id="openModaltwo" class="modalbg">
    <div class="dialog">
        <a href="#close" title="Close" class="close">X</a>
        <div class="single_project_popup">
            <div class="register">
                <h4 class="login_register_title">Create a new account:</h4>
                <div class="form-group">
                    <input type="text" class=" form-control requiredField input-label" placeholder="Username" name="name">
                </div>
                <div class="form-group">
                    <input type="text"  class=" form-control requiredField input-label" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control requiredField input-label" placeholder="Enter Email" name="email" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control requiredField input-label" placeholder="Enter Password" name="password" >
                </div>
                <div class="form-group mbnone">
                    <button class="btn btn-popup-bg" type="submit" name="submit">signup now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- END POPUP TAB TWO  -->

<!-- START NAVBAR -->
<div class="navbar navbar-default menu-top menu_dropdown">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index_video.html">Home Video</a></li>
                        </ul>
                    </li>
                    <li><a class="page-scroll" href="about.html">About</a></li>
                    <li><a class="page-scroll" href="service.html">Service</a></li>
                    <li><a class="page-scroll" href="gallery.html">Gallery</a></li>
                    <li><a class="page-scroll" href="event.html">Event</a></li>
                    <li><a class="page-scroll" href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div><!--- END CONTAINER -->
</div>
<!-- END NAVBAR -->
