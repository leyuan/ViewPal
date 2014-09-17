<!DOCTYPE html>
<html lang="en">
<title>Welcome to ViewPal</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8">
</script>
<script>
    $( document ).ready(function() {
        $('#webmaster-signup').hide(); 
        $('#signup-select').change(function(){
            if($('#signup-select').val() === 'webmaster') {
                $('#webmaster-signup').show();
                $('#user-signup').hide(); 
            } else {
                $('#user-signup').show();
                $('#webmaster-signup').hide(); 
            } 
        });
    });
</script>
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/bootstrap.css"?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/viewpal.css"?>"/>
<body>
<body>
    <div class="container">
	<h1>Welcome to Use ViewPal</h1>