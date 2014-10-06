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
        <link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/uikit.min.css"?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/bootstrap.css"?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/viewpal.css"?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo public_url()."lightSlider/css/lightSlider.css"?>"/>
        
        <!-- Important plugins -->
        <script src="<?php echo public_url()."js/jquery.js"?>"></script>
        <script src="<?php echo public_url()."js/bootstrap.js"?>"></script>
        <script src="<?php echo public_url()."lightSlider/js/jquery.lightSlider.js"?>"></script>
        <script src="<?php echo public_url()."js/uikit.min.js"?>"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                var slider = $('#content-slider').lightSlider({
                    minSlide:1,
                    maxSlide:1,
                    keyPress:true,
                    speed:500,
                    btn: true,
                    auto:false,
                    controls:false,
                    pager:false,
                    onSliderLoad: function() {
                        $('#content-slider').removeClass('cS-hidden');
                    } 
                });
                
                $('#hiring-btn').click(function(){
                    slider.goToNextSlide();
                });
                
                $("#applybtn").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#applynow").offset().top
                    }, 1000);
                });
                
                $("#btn-one-features").click(function(){
                   $("#feature-one-details").toggle("slow"); 
                });
                
                $("#btn-two-features").click(function(){
                   $("#feature-two-details").toggle("slow"); 
                });
                
                $("#btn-three-features").click(function(){
                   $("#feature-three-details").toggle("slow"); 
                });   
                
                $( "#blog-btn1" ).click(function() {
                    $( "#blog-readmore1" ).toggle( "slow" );
                });
                
                $("#btn-pricing").click(function(){
                    $("#pricing-more").toggle("slow");
                });
                
            });
        
            function upload(){
                document.getElementById("resume-upload").click();
            }
            

        </script>
   </head>
   
   <body>