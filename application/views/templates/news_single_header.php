<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<title>Read some News here</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo public_url()."js/jquery.leanModal.min.js"?>"></script>
<script type='text/javascript'>
    $(document).ready(function(){
        page_cost = 0.2; /*input your amount here*/
        if(getCookie("vp_username"))
        {
            // user logged in, show confirm box
            pwd = prompt("This page will cost you"+page_cost+". Process?");
            if (pwd != "" && user != null)
            {
                // ajax decrease balance
                alert("ajax");
            }
        }
        else
        {
            //user not logged in, log in or return
        }
    });
</script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/bootstrap.css"?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/viewpal.css"?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/popup-style.css"?>"/>

<body>
    <div class="container">