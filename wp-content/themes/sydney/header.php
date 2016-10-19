<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name');?></title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0"/>
    <!--  <link rel="stylesheet" href="/style.css"/>
      <link rel="stylesheet" href="libs/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link rel="stylesheet" href="libs/css/font-awesome/css/font-awesome.min.css">
      <script type="text/javascript" src="libs/js/jquery.min.js"></script>
      <script type="text/javascript" src="libs/js/bootstrap.min.js"></script>
  -->
    <?php wp_head();?>
</head>
<body>
    <div id="header">
    <div class="container" >
        <?php get_sidebar() ;?>
        <!--     <div class="logo">
                 <a href="#"><img src="img/logo.png" alt=""></a>
             </div>
     -->
         <nav class="navbar navbar-default menu" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
                </div>
                <?php
                wp_nav_menu( array(
                        'theme_location'    => 'menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>

                <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav ">

                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Delivery services</a></li>
                        <li><a href="#">Service areas</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Service areas<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sydney</a> </li>
                                <li><a href="#">Melbourne</a></li>
                                <li><a href="#">Brisbane</a></li>
                                <li><a href="#">Wollongong</a></li>
                            </ul>
                        <li><a href="#">Contact us</a></li>
                        <li ><a class="quote" href="#">Quote me</a></li>
                    </ul>

                </div>-->


            </div>
        </nav>
    </div>
</div>