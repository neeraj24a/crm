<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Error Occured</title>
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
            <div class="block-center mt-xl wd-xl">
                <?php echo $content; ?> 
                <div class="p-lg text-center">
                    <span>©</span>
                    <span>2018</span>
                    <span>-</span>
                    <span>CRM</span>
                    <br>
                    <span></span>
                </div>
            </div>
        </div><!-- ./wrapper -->

        <!-- =============== VENDOR SCRIPTS ===============-->
        <!-- MODERNIZR-->
        <script src="<?php echo $baseUrl; ?>/vendor/modernizr/modernizr.custom.js"></script>
        <!-- BOOTSTRAP-->
        <script src="<?php echo $baseUrl; ?>/vendor/bootstrap/dist/js/bootstrap.js"></script>
        <!-- STORAGE API-->
        <script src="<?php echo $baseUrl; ?>/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
        <!-- =============== APP SCRIPTS ===============-->
        <script src="<?php echo $baseUrl; ?>/js/app.js"></script>
    </body>
</html>