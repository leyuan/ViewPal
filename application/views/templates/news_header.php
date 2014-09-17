<!DOCTYPE html>
<html lang="en">
<title>Read some News here</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo public_url()."js/jquery.leanModal.min.js"?>"></script>
<script>
    $(document).ready(function(){
        merchant_id = "1"; /***your unique merchant id**/
        product_title = "";
        item_cost = "2";  /**the cost for this customer**/
        succeed_url = ""; 
        fail_url ="";

        var f = document.createElement("form");
        f.setAttribute('method',"post");
        f.setAttribute('action',"http://localhost:8080/codeigniter/sample_tutorial/index.php/users/checkout");
        
        var m_id = document.createElement("input");
        m_id.setAttribute('type',"hidden");
        m_id.setAttribute('name',"merchant_id");
        m_id.setAttribute('value',merchant_id);        
        
        var a = document.createElement("input");
        a.setAttribute('type',"hidden");
        a.setAttribute('name',"product_title");
        a.setAttribute('value',product_title);
        
        var b = document.createElement("input");
        b.setAttribute('type',"hidden");
        b.setAttribute('name',"item_cost");
        b.setAttribute('value',item_cost);
        
        var c = document.createElement("input");
        c.setAttribute('type',"hidden");
        c.setAttribute('name',"succeed_url");
        c.setAttribute('value',succeed_url);
        
        var d = document.createElement("input");
        d.setAttribute('type',"hidden");
        d.setAttribute('name',"fail_url");
        d.setAttribute('value',fail_url);

        var s = document.createElement("input");
        s.setAttribute('type',"submit");
        s.setAttribute('class',"btn btn-success");
        s.setAttribute('value',"Submit");
        
        f.appendChild(m_id);
        f.appendChild(a);
        f.appendChild(b);
        f.appendChild(c);
        f.appendChild(d);
        f.appendChild(s);
        
        document.getElementById("viewpal").appendChild(f);
    });
</script>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/bootstrap.css"?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/viewpal.css"?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo public_url()."css/popup-style.css"?>"/>

<body>
    <div class="container">