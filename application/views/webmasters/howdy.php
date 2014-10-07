<!-- Webmaster_howdy Body Page -->
<section class="upper-body">
    <div class="pricing-upper-body upper-body">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="container nav-container">
            <div class="navbar-header">
                <span class="logo text-right"><a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo public_url()."imgs/logo_white.png"?>" class="nav-logo"></a></span>
            </div>
          </div>
        </div>
        
        <div class="headline">
            <div class="container">
                <div class="headline-main-title">
                    <h1>Webmaster</h1>
                </div>
                <div class="headline-sub-title">
                    <h3>How are you doing today?</h3>
                </div>
            </div>
        </div>
    </div>  
</section><!-- End of .pricing-upper-body -->

<section class="main-body">
    <div class="body-one">
        <div class="container howdy-container">
            <div class="">
                <h3> Howdy webmaster, what do you want to do today</h3>
            </div>
            <div class="useful-link-container">
                <ul>
                    <li><a href="<?php echo base_url()."tutorial/webmaster"?>">How do I work with Viewpal?</a></li>
                </ul>
            </div>
            <div class="wm-login-container">
                <form action="<?php echo base_url()."webmaster/login"?>" onsubmit="" method="POST">
                    <div class='form-group'>
                        <label for='username'>Name</label>
                        <input type='text' class='form-control' name='wmname' placeholder='your name'>
                    </div>

                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' class='form-control' name='wmpwd' id='userpwd1' placeholder='your password'>
                    </div>

                    <button type='submit' class='btn btn-danger'>Login</button>
                </form>
            </div>
            <div class="wm-register-container text-center">
                <a href="<?php echo base_url()."webmaster/signup";?>">New webmaster? Click here to Register</a>
            </div>
        </div>
    </div><!-- End of .pricng-body-one -->
    <div class="body-two">
        
    </div> <!-- End of .features-body-two-->
</section>

<section class="lower-body">
    <div class="pricing-cta">
        <div class="features-cta-title">
            <h2> Are you ready to use ViewPal? </h2>
        </div>
        <div class="features-cta-btn-row">
            <a href="<?php echo base_url()."webmaster/signup"?>" class="btn cta-btn btn-signup">YES, I'M READY. SIGN ME UP NOW</a>
            <a href="<?php echo base_url()."features"?>" class="btn cta-btn btn-login">NO, I NEED TO SEE MORE FEATURES</a>       
        </div>
    </div>
</section>

<!-- End of Webmaster_howdy Body Page -->

