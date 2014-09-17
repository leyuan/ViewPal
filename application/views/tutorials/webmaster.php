<div class="use-viewpal">
    <h3> Here are the steps of how to use Viewpal in your website.</h3>
    <div class="step-container">
        <div class="step">
            <h4><strong>Part 0 - Link Pages</strong></h4>
            <div class="step-content">
                <p class="">Add these links to your header section.
                    (you might already used most of them:p)</p>

                <pre class="viewpal-code">
                    &lt;link rel="stylesheet" type="text/css" href="css/bootstrap.css"&gt;
                    &lt;link rel="stylesheet" type="text/css" href="css/viewpal.css"&gt;
                    &lt;link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"&gt;
                    &lt;script src="http://code.jquery.com/jquery-1.9.1.min.js"&gt;&lt;/script&gt;
                    &lt;script src="js/jquery.leanModal.min.js" type="text/javascript"&gt;&lt;/script&gt;
                    &lt;script src="js/viewpal.js"&gt; &lt;/script&gt;
                </pre>
            </div>            
            
            <h4><strong>Part 1 - Landing Page</strong></h4>
            <div class="step-content">
                <p class="">Put the following html code into your landing page,
                    it will LOCATE the viewpal login section.</p>
                <pre class="viewpal-code">
                    &lt;span id="viewpal" class=""&gt;&lt;/span&gt;
                </pre>
            </div>           
        </div>
        
        
        
        
        <div class="step">
            <h4><strong>Part 2 - Individual Page (Article, News, Solution, etc.)</strong></h4>
            <div class="step-content">
                <p class="">Add these links to your INDIVIDUAL page.
                    (maybe at the footer?)</p>

                <pre class="viewpal-code">
                    &lt;script&gt;
                        var viewpal = 1; /*On = 1; Off = 0*/
                        if(viewpal == 1)
                        {
                            var vp_username = getCookie("vp_username");
                            if(vp_username){
                                viewpal = 0;
                                return true;
                            }else{
                                vp_showoverlay();
                                vp_not_log_in();
                            }
                       }
                    &lt;/script&gt;
                </pre>
            </div>             
        </div>
    </div>
    
</div>