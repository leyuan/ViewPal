/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkpass()
{
    if($("#userpwd1").val() === $("#userpwd2").val())
    {
        $("#conf_msg").html("<h4>password matches!</h4>");
    }else{
        $("#conf_msg").html("<h4>password does not match</h4>");
    }
}

function user_login()
{
    if(!$("#username").val() || !$("#userpwd").val())
    {
        alert("at least a field is empty");
    }
    else
    {
        
        var username = $("#username").val();
        var pwd = $("#userpwd").val();
        var url = $("#login-ajax").val();
        var dashboard = $("#user-dashboard").val();
        $.ajax(
        {
        url : url,
        type: "POST",
        data : {username: username, pwd: pwd},
        dataType: "text",
        success: function(data, textStatus, jqXHR)
        {
            //data: data from server 
            if(data){
                window.alert(data);
                window.location = dashboard+"/?username="+data;
            }else{
                $("#ajax-login").html("<h5>Wrong username or email</h5>");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            window.alert("fail");
        }
        });
    }
}

function user_register()
{
    if($("#userpwd1").val() === $("#userpwd2").val())
    {
        return true;
    }else{
        return false;
    }
}
    
function checkCookie() {
    var user=getCookie("vp_username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
};

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


