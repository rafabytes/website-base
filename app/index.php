<!doctype html>
<?php
require_once 'classes/App.php';
$app = new App();
$param = $app->isHome();
$page = (count($param) > 1) ? $param[count($param)-1] : 'home';
?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="icon" href="img/favicon.png" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- process:[href]:build <?=$app->getBaseUrl()?>styles/ -->
        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->
        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:css(.tmp) /styles/main.css -->
        <link rel="stylesheet" href="<?php $app->getBaseUrl()?>../.tmp/styles/main.css">
        <!-- endbuild -->
        <!-- /process -->
        <!-- process:[src]:build <?=$app->getBaseUrl()?>/scripts/vendor/ -->
        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="<?php $app->getBaseUrl()?>../bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
        <!-- /process -->
    </head>
    <body>
        <!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <header id="siteHeader">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project name</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </header>

        <?php $app->getPagina(); ?>

        <footer id="siteFooter"></footer>

        <!-- process:[src]:build <?=$app->getBaseUrl()?>scripts/ -->
        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <script src="../bower_components/jquery/jquery.js"></script>
        <script src="../bower_components/modernizr/modernizr.js"></script>
        <script src="../bower_components/angular/angular.js"></script>
        <script src="../bower_components/angular-route/angular-route.js"></script>
        <script src="../bower_components/angular-sanitize/angular-sanitize.js"></script>
        <script src="../bower_components/angular-animate/angular-animate.js"></script>
        <script src="../bower_components/angular-resource/angular-resource.js"></script>
        <script src="../bower_components/greensock/src/uncompressed/TweenMax.js"></script>
        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:js scripts/main.js -->
        <!-- fileblock:js app -->
        <script src="scripts/main.js"></script>
        <!-- endfileblock -->
        <!-- endbuild -->
        <!-- /process -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                                                                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                                   e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                                   e.src='//www.google-analytics.com/analytics.js';
                                   r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>