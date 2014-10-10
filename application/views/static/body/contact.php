<!-- Pricing Body Page -->
<section class="upper-body">
    <div class="contact-upper-body upper-body">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="container nav-container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <span class="logo text-right"><a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo public_url()."imgs/logo_white.png"?>" class="nav-logo"></a></span>
                <span class="nav navbar-nav navbar-sub-container">
                    <a href="webmaster/signup" class="btn nav-btn nav-btn btn-signup nav-sub-btn">SIGN UP</a>
                    <a href="webmaster/howdy" class="btn nav-btn btn-login nav-sub-btn">LOG IN</a>
                </span>  
            </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo base_url()."features"?>">Features</a></li>
                <li><a href="<?php echo base_url()."whyviewpal"?>">Why ViewPal</a></li>
                <li><a href="<?php echo base_url()."pricing"?>">Pricing</a></li>
                <li><a href="<?php echo base_url()."blog"?>">Blog</a></li>
                <li class="active"><a href="<?php echo base_url()."contact"?>">Contact</a></li>
                <li><a href="<?php echo base_url()."hiring"?>" class="nav-hiring">Career</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()."webmaster/signup"?>" class="btn nav-btn btn-signup">SIGN UP</a></li>
                <li><a href="<?php echo base_url()."webmaster/howdy"?>" class="btn nav-btn btn-login">LOG IN</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
        
        <div class="headline">
            <div class="container">
                <div class="headline-main-title">
                    <h1>CONTACT US</h1>
                </div>
                <div class="headline-sub-title">
                    <h3>Our team of customer care ninjas is ready to hear from you.</h3>
                </div>
            </div>
        </div>
    </div>  
</section><!-- End of .pricing-upper-body -->

<section class="main-body">
    <div class="body-one">
        <div class="container pricing-body-container">
            <div class="center text-center contact-form">
                <h3> Reach out to us!</h3>
                <p> Got a question about ViewPal? Are you interested in partnering with us? Have some suggestions or just want to say hi? Contact us: </p>
                <form role="form">
                    <div class='form-group'>
                        <input type="text" class="form-control contact-form-element" id="hiring-name" placeholder="Name">
                    </div>
                    <div class='form-group'>
                        <input type="text" class="form-control contact-form-element" id="hiring-email" placeholder="Email">
                    </div>
                    <div class='form-group'>
                        <input type="text" class="form-control contact-form-element" id="hiring-phone" placeholder="Phone">
                    </div>
                    <div class='form-group'>
                       <textarea rows="10" cols="50" class='contact-form-element contact-textarea' placeholder=" Message "></textarea>
                    </div>
                    <span class="contact-submit-container">
                        <button type="submit" class="btn contact-btn contact-submit-btn">Submit</button>
                    </span>
                </form>
            </div>
        </div>
    </div><!-- End of .pricng-body-one -->
</section>

<section class="lower-body">
    <div class="contact-cta">
        <div class="features-cta-title">
            <h2> Are you ready to use ViewPal? </h2>
        </div>
        <div class="features-cta-btn-row">
            <a href="<?php echo base_url()."webmaster/signup"?>" class="btn cta-btn btn-signup">YES, I'M READY. SIGN ME UP NOW</a>
            <a href="<?php echo base_url()."features"?>" class="btn cta-btn btn-login">NO, I NEED TO SEE MORE FEATURES</a>       
        </div>
    </div>
</section>

<!-- End of Pricing Body Page -->