<div class="howdy-container">
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
    <div class="wm-register-container">
        <a href="<?php echo base_url()."webmaster/signup";?>">New webmaster? Click here to Register</a>
    </div>
</div>
