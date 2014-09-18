<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Genyx admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Genyx admin template" />

    <!-- Headings -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
    <!-- Text -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link href="<?php echo dsasset_path()."css/"?>bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo dsasset_path()."css/"?>bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo dsasset_path()."css/"?>icons.css" rel="stylesheet" />

    <!-- Plugins stylesheets -->
    <link href="<?php echo dsasset_path()."js/"?>plugins/misc/fullcalendar/fullcalendar.css" rel="stylesheet" /> 
    <link href="<?php echo dsasset_path()."js/"?>plugins/forms/uniform/uniform.default.css" rel="stylesheet" /> 
    <link href="<?php echo dsasset_path()."js/"?>plugins/ui/jgrowl/jquery.jgrowl.css" rel="stylesheet" /> 

    <!-- app stylesheets -->
    <link href="<?php echo dsasset_path()."css/"?>app.css" rel="stylesheet" /> 

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="<?php echo dsasset_path()."css/"?>custom.css" rel="stylesheet" /> 

    <!--[if IE 8]><link href="<?php echo dsasset_path()."css/"?>ie8.css" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo dsasset_path()."js/"?>html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo dsasset_path()."images/"?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo dsasset_path()."images/"?>ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo dsasset_path()."images/"?>ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo dsasset_path()."images/"?>ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo dsasset_path()."images/"?>ico/favicon.png">
    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <script src="<?php echo dsasset_path()."js/"?>conditionizr.min.js"></script>  
    <script src="<?php echo dsasset_path()."js/"?>bootstrap/bootstrap.js"></script>  
    <script src="<?php echo dsasset_path()."js/"?>plugins/core/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?php echo dsasset_path()."js/"?>plugins/core/jrespond/jRespond.min.js"></script>
    <script src="<?php echo dsasset_path()."js/"?>jquery.genyxAdmin.js"></script>

    <!-- Form plugins -->
    <script src="<?php echo dsasset_path()."js/"?>plugins/forms/uniform/jquery.uniform.min.js"></script>

    <!-- Misc plugins -->
    <script src="<?php echo dsasset_path()."js/"?>plugins/misc/fullcalendar/fullcalendar.min.js"></script>

    <!-- UI plugins -->
    <script src="<?php echo dsasset_path()."js/"?>plugins/ui/jgrowl/jquery.jgrowl.min.js"></script>

    <!-- Init plugins -->
    <script src="<?php echo dsasset_path()."js/"?>app.js"></script><!-- Core js functions -->
    <script src="<?php echo dsasset_path()."js/"?>pages/dashboard.js"></script><!-- Init plugins only for page -->

  </head>
  <body>
    <header id="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="dashboard.html"><img src="<?php echo dsasset_path()."images/"?>logo.png" alt="Genyx admin"></a>
                <div class="nav-no-collapse">     
                    <ul class="nav pull-right">
                        <li class="divider-vertical"></li>
                        <li class="dropdown user">
                             <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                 <img src="<?php echo dsasset_path()?>images/avatars/sugge.jpg" alt="sugge">
                                <span class="more"><i class="icon16 i-arrow-down-2"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class=""><i class="icon16 i-cogs"></i> Settings</a></li>
                                <li><a href="profile.html" class=""><i class="icon16 i-user"></i> Profile</a></li>
                                <li><a href="<?php echo base_url()."index.php/webmaster/logout"?>" class=""><i class="icon16 i-exit"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header> <!-- End #header  -->