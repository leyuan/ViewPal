<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Lucius">
        <link rel="shortcut icon" href="<?php echo public_url()."imgs/graphicon.png"?>">
        <title>ViewPal features: The best way to monetize your website</title>
        
        <!-- Core Stylesheets -->
        <link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/bootstrap.css"?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/viewpal.css"?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo public_url()."lightSlider/css/lightSlider.css"?>"/>
        
        <!-- Important plugins -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo public_url()."js/bootstrap.js"?>"></script>
        <script src="<?php echo public_url()."lightSlider/js/jquery.lightSlider.js"?>"></script>
   </head>
   
   <body>
       <div class="home-container">
            <div class="home-section home-navbar">
                <span class="nav-left">
                    <img src="<?php echo public_url()."imgs/logo.png"?>" class="img-logo">
                </span>
                <span class="nav-right text-right">
                    <span class='home-hiring'>
                        <a href="<?php echo base_url()."hiring"?>" class="a-home-hiring"><u>We're Hiring</u></a>
                    </span>
                    <a href="<?php echo base_url()."signin"?>" class="btn home-signin">Sign In</a>
                </span>
            </div>
            <div class="home-section home-body">
                <div class="home-text-container">
                    <h1>You create quality content</h1>
                    <h1 class="viewpal-blue">Viewpal helps you monetize it</h1>
                    <span class="home-body-btn">
                         <a href="<?php echo base_url()."user/signup"?>" class="btn home-btn btn-home-try">Try ViewPal Risk Free</a>
                         <a href="<?php echo base_url()."features"?>" class="btn home-btn btn-home-tour">Take a Tour</a>
                    </span>
                </div>
                <div class="home-happy-girl">
                    <img src="<?php echo public_url()."imgs/happy_girl.png";?>" class="happygirl-img-home" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
                </div>
                 <div class="home-img-container">
                     <img src="<?php echo public_url()."imgs/home-graph.png"?>" class="graph-img-home" unselectable="on">
                </div>
            </div>
       </div>
        <div class="home-section home-footer text-center">
            <ul class="home-footer">
                <li><a href="<?php echo base_url()."features"?>">Features</a></li>
                <li><a href="<?php echo base_url()."whyviewpal"?>">Why ViewPal</a></li>
                <li><a href="<?php echo base_url()."pricing"?>">Pricing</a></li>
                <li><a href="<?php echo base_url()."blog"?>">Blog</a></li>
                <li><a href="<?php echo base_url()."contact"?>">Contact</a></li>
                <li><a href="<?php echo base_url()."hiring"?>">Career</a></li>
            </ul>
            <h4>© 2014 ViewPal · All rights reserved · Privacy Policy · Terms of Use</h4>
        </div>
   </body>
</html>