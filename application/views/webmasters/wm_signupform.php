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
                    <h3>Try ViewPal Risk Free</h3>
                </div>
            </div>
        </div>
    </div>  
</section><!-- End of .pricing-upper-body -->

<section class="main-body">
    <div class="body-one">
        <div class="container webmaster-signup-container">
            <div class='vp-webmaster-signup'>
                <h3>Pleas fill in the information below</h3>
                <hr>
                <div class='webmaster-signup-form'>
                    <form action='<?php echo base_url()."webmaster/signup/welcome"?>' onsubmit="return user_register();" role='form' method="POST">
                            <div class='form-group'>
                                <label for='wmname'>WebMaster Name</label>
                                <input type='text' class='form-control' name='wmname' placeholder='your name'>
                            </div>

                            <div class='form-group'>
                                <label for='email'>Email Address</label>
                                <input type='email' class='form-control' name='wmemail' placeholder='your email'>
                            </div>

                            <div class='form-group'>
                                <label for='password'>Password</label>
                                <input type='password' class='form-control' name='wmpwd' id='userpwd1' placeholder='your password'>
                                <br>
                                <input type='password' class='form-control' id='userpwd2' placeholder='re-enter your password' onkeyup="return checkpass(); return false;">
                                <span id='conf_msg'></span>
                            </div>

                            <div>
                                <label for="website-url">Website Url</label>
                                <input type="text" class="form-control" name="weburl" id="weburl" placeholder="your website url">
                            </div>

                            <div id="wm-signup-btn">
                                <button type='submit' class='btn btn-success'>Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End of .pricng-body-one -->
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
