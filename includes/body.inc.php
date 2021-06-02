<?php
include_once ("config.inc.php");
function top(){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>PC4U</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/favicon.ico">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/testimonial.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>



<body>
<div class="navbar" role="navigation" style="height: 130px; background-color: #0d0d0d">
    <div class="collapse navbar-collapse" style="background-color: #0d0d0d">
        <ul class="nav navbar-nav">
            <li class= "hidden-xs hidden-sm" style="float: left">
                <a rel="home" href="index.php"><img class="logo" src="img/logo.png" width="250" alt="logo"></a>
            </li>
        </ul>
        <ul class="nav navbar-nav" style="padding-left: 10%">
            <li><a href="index.php" style="color: orange;text-decoration: none;">INÍCIO</a></li>
            <li><a href="about.php" style="color: orange;text-decoration: none;">SOBRE NÓS</a></li>
            <li><a href="gamas.php" style="color: orange;text-decoration: none;">GAMAS</a></li>
            <li><a href="gamas.php" style="color: orange;text-decoration: none;">CATALOGO</a></li>
            <li><a href="contact.html" style="color: orange; text-decoration: none;">Contactos</a></li>
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
                    <i class="fa fa-2x fa-facebook" id="fb"></i>
                    <i class="fa fa-2x  fa-twitter" id="tt"></i>
                    <i class="fa fa-2x  fa-google-plus"id="gl"></i>
                    <i class="fa fa-2x  fa-instagram" id="insta"></i>
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
