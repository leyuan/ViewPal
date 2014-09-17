<strong>&copy; 2011</strong>
<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-5.newrelic.com","eb488e72a1","3758250","NgEEZBYHDUFWVk0KWg9LJUUXEgxfGFZWB1AIAwhZEAMRHR0=",0,117,new Date().getTime(),"","","","",""]);</script></body>
</div>
<script type="text/javascript" src="<?php echo public_url()."js/vp_functions.js"?>"></script>
<script type="text/javascript">
	$(".modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Register Form
		$("#register_form").click(function(){
			$(".user_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_register").hide();
			$(".user_login").show();
			$(".header_title").text('Login');
			return false;
		});
        
        $("#vp_login").click(function(){
           username = $("#vp_user").val();
           pwd = $("#vp_pwd").val();
           //alert(username);
           $.ajax({
                type: "POST",
                url: "http://localhost:8080/codeigniter/sample_tutorial/index.php/users/login",
                data: "name="+username+"&pwd="+pwd,
                dataType: 'html',
                success: function(result){
                    if(result)
                    {
                        setCookie('vp_username',username,30);
                        alert("userbalance:"+result);
                        checkCookie();
                        $("#vp_user_back").html(username);
                        $("#vp_user_balance").html(result);
                        $(".user_login").hide();
                        $(".user_register").hide();
                        $(".user_summary").show();
                        
                        
                    }
                    else
                    {
                        alert("login failed");
                    }
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert("login ajax error");
                }
            });
            return false;       
           
        });

	});
</script>
</body>
</html>
