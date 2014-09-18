<?php if(isset($username)){ ?>
    <div class="">
        <h4> Welcome back 
            <a href="<?php echo base_url()."index.php/user/dashboard?username=".$_SESSION['username'];?>">
                <?php echo $_SESSION['username'];?>
            </a>
            <a href="<?php echo base_url()."index.php/user/logout";?>">(log out?)</a>
        </h4>
    </div>
<?php } elseif(isset($_SESSION['wmname'])) { ?>
    <div class="">
        <h4> Welcome back WebMaster
            <a href="<?php echo base_url()."index.php/webmaster/dashboard?wmname=".$_SESSION['wmname'];?>">
                <?php echo $_SESSION['wmname'];?>
            </a>
            <a href="<?php echo base_url()."index.php/webmaster/logout";?>">(log out?)</a>
        </h4>
    </div>
<?php } else {?>
    <div class=''>
        <h3> Welcome using Viewpal </h3>

        <a href="<?php echo base_url()."index.php/user/signup";?>" class="btn btn-success"> Sign Up</a>
        <a href="#modal" id="user_login" class="btn btn-primary" onclick=""> Log in</a>
        <br>
        <a href="<?php echo base_url()."index.php/webmaster/howdy";?>">webmaster?click here</a>

    </div>
<?php }?>

<div id="modal" class="popupContainer" style="display:none;">
    <header class="popupHeader">
        <span class="header_title">Viewpal Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>

    <section class="popupBody">
        <!-- Username & Password Login form -->
        <div class="user_login">
            <form name="login-form" action="">
                <input type="hidden" id="login-ajax" value="<?php echo base_url()."index.php/user/login"?>">
                <input type="hidden" id="user-dashboard" value="<?php echo base_url()."index.php/user/dashboard"?>">    
                <label>Email / Username</label>
                <input type="text" id="username"/>
                <br />

                <label>Password</label>
                <input type="password" id="userpwd"/>
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half last"><input type="button" href="#" class="btn btn_red" value="login" onclick="user_login();"></div>
                </div>

            </form>
            <div id="ajax-login"></div>
            <a href="#" class="forgot_password">Forgot password?</a>
        </div>
    </section>
</div>
