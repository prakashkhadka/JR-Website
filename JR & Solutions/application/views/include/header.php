<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta id="meta" name="viewport"
    content="width=device-width; initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/images/Logo/favicon-32x32.png')?>"/>
    <title><?php echo $current_page['title']; ?> </title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url("public/css/style.css");?>">
    <script type="text/javascript">var switchTo5x=true;</script>


    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "2b2a47d5-4be5-434a-a355-627486d73bbf", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>

    <body>


        <header>
            <nav class="navbar navbar-default navbar-fixed-top">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" id="toggle-menu">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>


                    <!-- Brand Image -->
                    <a class="navbar-brand" href="www.jrandsolutions.com.au">

                        <img class="hidden-xs hidden-xs hidden-sm" id="header-logo" src="<?php echo base_url("public/images/logo/JRTest.png")?>" alt="JR & SOlutions ">

                        <img class="visible-sm visible-xs" id="header-logo-sm" src="<?php echo base_url("public/images/logo/JRTest.png")?>" alt="JR & SOlutions ">

                    </a>

                </div>


                <!-- top right call us group button-->
                <div  id="top-right-call-us" class="btn-group hidden-sm hidden-xs" role="group">

                    <button type="button" class="btn btn-success"><i class="fa fa-phone"></i></button>
                    <button type="button" class="btn btn-default " id="call-us">Call us (+61) 280155269 
                        <img  id="aus-icon" src="<?php echo base_url("public/images/logo/Australia.png")?>" alt="JR & Solutions "></button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-nav">

                        <ul class="nav navbar-nav navbar-right">

                            <!--PHP loop for navigation menu item -->

                            <?php
                            foreach ($navigation_menu as $nav_item) {?>
                            <li><a href="<?php echo base_url( $nav_item['page_url']);?>"><?php echo $nav_item['title'] ?></a></li>
                            <?php } ?>
                        </ul>

                    </div><!-- End navbar-collapse -->

                </nav> <!-- End navbar-fixed-top -->

            </header> <!--End header -->

