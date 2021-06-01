<?php
function top(){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Humanity</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/testimonial.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="header container">
    <div class="visible-xs visible-sm col-xs-12 col-sm-12 text-center sm-logo">
        <a rel="home" href="index.html">
            <img src="img/logo.png" width="200" alt="logo">
        </a>
    </div>
</div>
<div class="navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="selected"><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Sevices</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li class= "hidden-xs hidden-sm">
                <a rel="home" href="index.php"><img class="logo" src="img/logo.png" width="200" alt="logo"></a>
            </li>
            <li><a href="event.html">Events</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="donate.html">Donate</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
</div>


<?php
}

function bot(){
    ?>

<!-- ============FOOTER============= -->
<footer id="footer">
    <div class="footer-content container">
        <div class="footer-adress text-center col-xs-12 col-sm-4 col-md-4">
            <h4>Great love for humanity</h4>
            <ul class="footer-menus">
                <li>Home /</li>
                <li>About </li><br />
                <li>Service /</li>
                <li>Gallery /</li>
                <li>Contact</li>
            </ul>
        </div>
        <div class="footer-second col-xs-12 col-sm-4 col-md-4">
            <div class="social-block text-center">
                <div class="social-share">
                    <i class="fa fa-2x fa-facebook"></i>
                    <i class="fa fa-2x  fa-twitter"></i>
                    <i class="fa fa-2x  fa-google-plus"></i>
                    <i class="fa fa-2x  fa-instagram"></i>
                </div>
            </div>
            <p class="text-center footer-text1">123 456 7890</p>
            <p class="text-center footer-text">humanity@shuvohabib.com</p></div>
        <div class="footer-third col-xs-12 col-sm-4 col-md-4">
            <div class="copyright">
                <span>Copyright 2014 Theme</span><br>
                <span>All Rights Reserved</span>
            </div>
        </div>
    </div>
    <div class="move-top-page">
    </div>
</footer>

<!-- script references -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/nav-hover.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- Place in the <head>, after the three links -->
<script>
    $('.testimonials-slider').bxSlider({
        slideWidth: 800,
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 32,
        auto: true,
        autoControls: true
    });
</script>
<script type="text/javascript">
</script>
</body>
</html>
<?php
}
    ?>
