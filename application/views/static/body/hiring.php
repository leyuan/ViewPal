<!-- Pricing Body Page -->
<section class="upper-body">
    <div class="hiring-upper-body upper-body">
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
                <li><a href="<?php echo base_url()."contact"?>">Contact</a></li>
                <li  class="active"><a href="<?php echo base_url()."hiring"?>" class="nav-hiring">Career</a></li>
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
                    <h1>CAREERS</h1>
                </div>
                <div class="headline-sub-title">
                    <h3>Become Part of the Micropayment Revolution.</h3>
                </div>
            </div>
        </div>
    </div>  
</section><!-- End of .pricing-upper-body -->

<section class="main-body">
    <div class="body-one">
        <div class="container hiring-body-container">
            <div class="hiring-body-one-title text-center">
                <h2>Why Work for ViewPal?</h2>
            </div>
            <div class="hiring-body-one-content text-center">
                <ul id="content-slider" class="list-unstyled clearfix cSdemo cS-hidden" >
                    <li>
                        <div class="center hiring-slide">
                            <h3>Our Mission</h3>
                            <div class="features">
                                <p> We are at the cutting edge of
                                how people monetize content online. </p>
                            </div>
                        </div>
                        <span class="h100"></span>
                    </li>
                    <li>
                        <div class="center hiring-slide">
                            <h3>Your Ideas</h3>
                            <div class="features">
                                <p> If you think it, you can create it.
                                We love your suggestions for how to shape the company. </p>
                            </div>
                        </div>
                        <span class="h100"></span>
                    </li>
                    <li>
                        <div class="center hiring-slide">
                            <h3>The Life</h3>
                            <div class="features">
                                <p> Full benefits, good pay,
                                working alongside talented people,
                                and a super cute company dog. </p>
                            </div>
                        </div>
                        <span class="h100"></span>
                    </li>                    
                </ul>
                <button class="hiring-btn" id="hiring-btn">SHOW ME <br> ANOTHER REASON</button>
            </div>
        </div>
    </div><!-- End of .pricng-body-one -->
    <div class="body-two">
        <div class="container hiring-body-container">
            <div class="hiring-body-two-title text-center">
                <h4> SOUNDS PRETTY GOOD, RIGHT? </h4>
                <h2> SO JOIN US </h2>
            </div>
            <div class="hiring-body-two-content text-center">
                <p>
                    ViewPal is a fast-growing company with amazing employees who do outstanding work.
                    Our mission is to redefine the relationship between content providers and their readers.
                    Join us as we reshape the publication technology landscape.
                </p>
                <a class="btn hiring-btn hiring-apply-btn" id="applybtn" onclick="applynow()"> Open Positions </a>
            </div>
        </div>
    </div> <!-- End of .hiring-body-two-->
    
    <div class="body-one body-three">
        <div class="container hiring-body-container">
            <div class="body-three-title" id='applynow'>
                <h2 class="text-center">Current openings</h2>
                <span class="hiring-position">
                    <h4>ViewPal is actively seeking for the following positions:</h4>
                    <ul class="position-list">
                        <li class="filled"><strike>Software Developement Intern</strike> - filled!</li>
                        <li class="available">Graphic Designer</li>
                        <li class="filled"><strike>Blogger/Editor</strike> - filled!</li>
                        <li class="filled"><strike>Front End Developer</strike> - filled!</li>
                        <li class="available">Senior PHP Developer</li>
                    </ul>
                    <h5>Haven't found the perfect position for you? Don't worry, drop your resume here!</h5>
                    
                    <span class='hiring-form'>
                        <h3 class='hiring-h3'>Personal Information:</h3>
                        <form role="form">
                            <div class='form-group'>
                                <input type="text" class="form-control hiring-personal" id="hiring-name" placeholder="Name *">
                            </div>
                            <div class='form-group'>
                                <input type="text" class="form-control hiring-personal" id="hiring-email" placeholder="Email *">
                            </div>
                            <div class='form-group'>
                                <input type="text" class="form-control hiring-personal" id="hiring-phone" placeholder="Phone">
                            </div>
                            <h3 class='hiring-h3'>Professional Information:</h3>
                            <div class='form-group'>
                               <textarea rows="10" cols="50" class='hiring-personal hiring-textarea' placeholder="Cover Letter"></textarea>
                            </div>
                            <div class='form-group'>
                                <input type="text" class="form-control hiring-personal" id="hiring-url" placeholder="Portfolio URL (if applicable)">
                            </div>
                            <div class="form-group">
                              <input type="file" id="resume-upload" class='btn hiring-btn hidden'>
                              <input type='button' class='btn hiring-btn resume-btn' value='Resume: Choose File to Upload' onclick='upload()'>
                            </div>
                            <button type="submit" class="btn hiring-btn hiring-submit-btn">Apply Now</button>
                        </form>
                    </span>
                </span>
            </div>
            <!--
            <div class="body-three-content">
                <div class="open-position">
                    <div class="position-container">
                        <p>Software Developement Intern</p>
                        <div class="glyphicon glyphicon-plus hiring-glyph"></div>                 
                        <div class="work-detail">
                        </div>
                    </div>
                </div>
            </div>
            -->
            
        </div>
    </div>
</section>

<section class="lower-body">
    <div class="hiring-cta">
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