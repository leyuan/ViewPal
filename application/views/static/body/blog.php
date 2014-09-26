<!-- Blog Body Page -->
<section class="upper-body">
    <div class="blog-upper-body upper-body">
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
                <span class="logo"><a class="navbar-brand" href="#">ViewPal</a></span>
                <span class="nav navbar-nav navbar-sub-container">
                    <a href="../navbar/" class="btn nav-btn nav-btn btn-signup nav-sub-btn">SIGN UP</a>
                    <a href="../navbar-static-top/" class="btn nav-btn btn-login nav-sub-btn">LOG IN</a>
                </span>  
            </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo base_url()."index.php/features"?>">Features</a></li>
                <li><a href="<?php echo base_url()."index.php/whyviewpal"?>">Why ViewPal</a></li>
                <li><a href="<?php echo base_url()."index.php/pricing"?>">Pricing</a></li>
                <li class="active"><a href="<?php echo base_url()."index.php/blog"?>">Blog</a></li>
                <li><a href="<?php echo base_url()."index.php/contact"?>">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()."index.php/user/signup"?>" class="btn nav-btn btn-signup">SIGN UP</a></li>
                <li><a href="<?php echo base_url()."index.php/user/login"?>" class="btn nav-btn btn-login">LOG IN</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
        
        <div class="headline">
            <div class="container">
                <div class="headline-main-title">
                    <h1>Blog</h1>
                </div>
                <div class="headline-sub-title">
                    <h3>Things are happening.</h3>
                </div>
            </div>
        </div>
    </div>  
</section><!-- End of .blog-upper-body -->

<section class="main-body">
    <div class="body-one">
        <div class="container blog-body-container">
            <div class="blog-element">
                <div class="blog-img-container">
                    <img src="<?php echo public_url()."imgs/blog1.png"?>" class="blog-feature-img">
                </div>
                <div class="blog-title">
                    <h2>Rising into the Cloud: Thoughts and Ideas from Day One</h2>
                </div>
                <div class="blog-info">
                    <h5>Posted by Tim Travis on September 23, 2014</h5>
                </div>
                <div class="blog-content center">
                    <p>
                        Fifteen years ago, I was sitting in the middle of what was then the next big thing in legal.
                        It was the age of “merger mania” and I was working at a venerable old law firm that was about to become part of a new and “improved” law firm. 
                        Yes it was BIG. But what I saw and experienced yesterday was BIGGER. And better.
                    </p>
                    <span class="blog-full-content" id="blog-readmore1" style="display:none;">
                        <p>
                            Day One of the Clio Cloud Conference was essentially about three things: Innovating, Growing, and Leading. The energy was off the hook. And we expect that to continue today as we enter Day Two.
                            If I may be allowed to quote myself (thanks to Neil Shankman, Clio’s new VP, Marketing, for taking my cheesy little remark and making it part of his opening address—which was tweeted back to me within seconds—thank you, forward-thinking lawyers), “we’ve emerged from the fog and into the cloud”. Clio is a major part of that and we want to be driving that progression. But actually, YOU are driving that.
                        </p>
                        <p>
                            What did we learn yesterday? I asked a few people on the conference floor. And thanks to the support of lawyers like you, as well as Clio staffers and conference partners, there was more to Day One than just dancing and tweeting.
                            Lots more!
                        </p>
                    </span>
                    <button class="btn blog-readmore-btn center" id="blog-btn1"> READ MORE </button>

                </div>
            </div>
        </div>
    </div><!-- End of .blog-body-one -->
</section>

<section class="lower-body">
    <div class="blog-cta">
        <div class="features-cta-title">
            <h2> Are you ready to use ViewPal </h2>
        </div>
        <div class="features-cta-btn-row">
            <a href="../navbar/" class="btn cta-btn btn-signup">YES, I'M READY. SIGN ME UP NOW</a>
            <a href="../navbar-static-top/" class="btn cta-btn btn-login">NO, I NEED TO VIEW SOME RESUTLS</a>       
        </div>
    </div>
</section>

<!-- End of Blog Body Page -->