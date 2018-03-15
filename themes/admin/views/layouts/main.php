<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- FONT AWESOME-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/vendor/fontawesome/css/font-awesome.min.css">
        <!-- SIMPLE LINE ICONS-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/vendor/simple-line-icons/css/simple-line-icons.css">
        <!-- ANIMATE.CSS-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/vendor/animate.css/animate.min.css">
        <!-- WHIRL (spinners)-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/vendor/whirl/dist/whirl.css">
        <!-- =============== PAGE VENDOR STYLES ===============-->
        <!-- WEATHER ICONS-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/vendor/weather-icons/css/weather-icons.min.css">
        <!-- =============== BOOTSTRAP STYLES ===============-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/bootstrap.css" id="bscss">
        <!-- =============== APP STYLES ===============-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/app.css" id="maincss">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <?php include 'header.php'; ?>
            <?php include 'sidebar.php'; ?>
            <!-- Main section-->
            <section>
                <?php echo $content; ?> 
            </section>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2015-2016.</strong> All rights reserved.
            </footer>

        </div><!-- ./wrapper -->

        <!-- =============== VENDOR SCRIPTS ===============-->
        <!-- MODERNIZR-->
        <script src="<?php echo $baseUrl; ?>/vendor/modernizr/modernizr.custom.js"></script>
        <!-- MATCHMEDIA POLYFILL-->
        <script src="<?php echo $baseUrl; ?>/vendor/matchMedia/matchMedia.js"></script>
        <!-- BOOTSTRAP-->
        <script src="<?php echo $baseUrl; ?>/vendor/bootstrap/dist/js/bootstrap.js"></script>
        <!-- STORAGE API-->
        <script src="<?php echo $baseUrl; ?>/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
        <!-- JQUERY EASING-->
        <script src="<?php echo $baseUrl; ?>/vendor/jquery.easing/js/jquery.easing.js"></script>
        <!-- ANIMO-->
        <script src="<?php echo $baseUrl; ?>/vendor/animo.js/animo.js"></script>
        <!-- SLIMSCROLL-->
        <script src="<?php echo $baseUrl; ?>/vendor/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- SCREENFULL-->
        <script src="<?php echo $baseUrl; ?>/vendor/screenfull/dist/screenfull.js"></script>
        <!-- LOCALIZE-->
        <script src="<?php echo $baseUrl; ?>/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
        <!-- RTL demo-->
        <script src="<?php echo $baseUrl; ?>/js/demo/demo-rtl.js"></script>
        <!-- =============== PAGE VENDOR SCRIPTS ===============-->
        <!-- SPARKLINE-->
        <script src="<?php echo $baseUrl; ?>/vendor/sparkline/index.js"></script>
        <!-- FLOT CHART-->
        <script src="<?php echo $baseUrl; ?>/vendor/flot/jquery.flot.js"></script>
        <script src="<?php echo $baseUrl; ?>/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/vendor/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo $baseUrl; ?>/vendor/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo $baseUrl; ?>/vendor/flot/jquery.flot.time.js"></script>
        <script src="<?php echo $baseUrl; ?>/vendor/flot/jquery.flot.categories.js"></script>
        <script src="<?php echo $baseUrl; ?>/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
        <!-- EASY PIE CHART-->
        <script src="<?php echo $baseUrl; ?>/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js"></script>
        <!-- MOMENT JS-->
        <script src="<?php echo $baseUrl; ?>/vendor/moment/min/moment-with-locales.min.js"></script>
        <!-- DEMO-->
        <script src="<?php echo $baseUrl; ?>/js/demo/demo-flot.js"></script>
        <!-- =============== APP SCRIPTS ===============-->
        <script src="<?php echo $baseUrl; ?>/js/app.js"></script>
    </body>
</html>