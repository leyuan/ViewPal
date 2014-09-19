$base_url = "http://localhost:8080/codeigniter/sample_tutorial/index.php/";
$domain_name = window.location.hostname;
alert("domain:"+$domain_name);
$page_url = document.URL;

$("document").ready(function(){
    if($viewpal == 1)
    {
        $vp_username = getCookie("vp_username");
        if($vp_username){
            $status = check_history($vp_username);        
        }else{
            //alert('overlay?');
            vp_showoverlay();
            vp_not_log_in();
        }

    }    
});

/**functions for Cookies**/
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie(cname) {
    var user = getCookie(cname);
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        return 0;
    }
}

/**functions for showing different sections**/
function vp_showoverlay(){    
    
    $("body").append("<div id='vp_overlay'></div>");                
    $("body").append("<div id='vp_container'></div>");
    return true;
}

function vp_not_log_in(){
    
    $("#vp_container").html("<div id='vp_signup'><h3>Ever heard of ViewPal? Sign UP!</h3></div>");
    $("#vp_signup").append("<h5 class='vp_intro'> Intro to ViewPal </h5>");
    $("#vp_signup").append("<button type='button' class='btn btn-lg btn-primary' onclick='vp_show_signup()'>Sign Up</button>");
    $("#vp_signup").append("<button type='button' class='btn btn-lg btn-success' onclick='vp_show_login()'>Log In ANd Pay</button>");
    $("#vp_signup").append("<button type='button' class='btn btn-lg btn-warning' onclick='vp_notinterested()'>Not Interested</button>");
    return true;
}

function vp_show_login()
{
    $("#vp_signup").hide();
    $vp_login_form = vp_create_form();
    $("#vp_container").append($vp_login_form);
}

function vp_create_form(){

    $vp_form = $("<div id='vp-login-form'>\
        <div id='vp-form-container'> \
            <div class='form-group'>\
            <label for='name'>Name</label>\
            <input type='text' class='form-control vp-form-length' id='i-username' placeholder='Enter your name'>\
            </div>\
            <div class='form-group'>\
            <label for='password'>Password</label>\
            <input type='password' class='form-control vp-form-length' id='i-pwd' placeholder='Password'>\
            </div>\
            <button type='button' class='btn btn-warning' onclick='log_form_back()'>Back</button>\
            <button type='button' class='btn btn-success' onclick='i_vp_login();'>Login</button>\
            <span id='i-ajax-error'></span> \
        </div>\
    </div>");
    return $vp_form;
}

function log_form_back()
{
    $("#vp_container").html("");
    vp_not_log_in();
}

function vp_show_signup(){
    alert(document.URL);
    setCookie("vp_redirect",document.URL, 1);
   // window.location = "http://www.viewpal.com/signup";
}

function vp_notinterested(){
    if(document.referrer)
    {
        window.location = document.referrer;
    }
    else
    {
        window.location = "http://www.viewpal.com/notinterested";
    }
}

/**functions for login/logout**/
function i_vp_login() {
    $username = $("#i-username").val();
    $pwd = $("#i-pwd").val();
    alert("username:"+$username+"/"+"hostname:"+window.location.hostname+"/"+"pagecost:"+$pagecost+"/"+"mid:"+$mid);
    $.ajax({
        url : "http://localhost:8080/codeigniter/sample_tutorial/index.php/user/login",
        type: "POST",
        data : {username: $username, pwd: $pwd},
        dataType: "text",
        success: function(data, textStatus, jqXHR)
        {
            //data: data from server 
            if(data != 0){
                /**Check their Balance next**/
                checkBalance($username,$pagecost);                
            }else{
                $error_msg = "Wrong username or email";
                $("#i-ajax-error").html("<h5 style='color:red;'>"+$error_msg+"</h5>");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            window.alert("fail");
        }
    });
}

function checkBalance($username,$pagecost)
{
    $.ajax({
        url: "http://localhost:8080/codeigniter/sample_tutorial/index.php/ajax/checkbalance",
        type: "POST",
        data: {username: $username, pagecost: $pagecost},
        dataType: "text",
        success: function(data, textStatus, jqXHR)
        {
            //data: data from server
            if (data != 0)
            {
                window.alert("check balance succeed");
                window.alert("status:"+data);
                pay($username,$pagecost,$mid);                                   
            }else {
                $error_msg = "sorry, not enought money for this page, this page will cost you $"+$pagecost;
                $("#i-ajax-error").html("<h5 style='color:red;'>"+$error_msg+"</h5>");   
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            window.alert("fail");
        }
    });
}

function pay($username,$pagecost,$mid)
{
    $.ajax({
        url: "http://localhost:8080/codeigniter/sample_tutorial/index.php/ajax/pay",
        type: "POST",
        data: {username: $username, pagecost: $pagecost, mid: $mid, domain: $domain_name, page_url: $page_url},
        dataType: "text",
        success: function(data, textStatus, jqXHR)
        {
            /**User successfully logged in here**/
            setCookie("vp_username", $username, 7);
            location.reload();          
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            window.alert("pay fail");
            $error_msg = "transaction error, please try again later";
            $("#i-ajax-error").html("<h5 style='color:red;'>"+$error_msg+"</h5>");
            window.alert("textStatus:"+errorThrown);
        }
    });    
}

function vp_logout()
{
    $vp_username = getCookie("vp_username");
    setCookie("vp_username",$vp_username,-1);
    location.reload();
}

function check_history($vp_username)
{
    $url = $base_url+"ajax/checkhistory";
    window.alert($url);
    $.ajax({
        url: $url,
        type: "POST",
        data: {username: $vp_username, page_url: $page_url},
        dataType: "text",
        success: function(data, textStatus, jqXHR)
        {
            window.alert(data);
            $("#ajax-info").html(data);
            if( data != 0 )
            {
                ;
            }
            else
            {
                alert("need to purchase this");
                vp_showoverlay();
                vp_not_log_in();
            }
        },
        error: function(data, textStatus, errorThrown)
        {
            window.alert("check history fail");
        }
    });
}
