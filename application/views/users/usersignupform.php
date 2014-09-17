<div class='vp-user-signup'>

    <h3>Pleas fill in the information below</h3>
    <hr>
    <div class='user-signup-form'>
        <form action='<?php echo base_url()."index.php/signup/user/welcome"?>' onsubmit="return user_register();" role='form' method="POST">
                <div class='form-group'>
                    <label for='username'>Name</label>
                    <input type='text' class='form-control' name='username' placeholder='your name'>
                </div>
                <div class='form-group'>
                    <label for='email'>Email Address</label>
                    <input type='email' class='form-control' name='email' placeholder='your email'>
                </div>
                <div class='form-group'>
                <label for='password'>Password</label>
                    <input type='password' class='form-control' name='pwd' id='userpwd1' placeholder='your password'>
                    <br>
                    <input type='password' class='form-control' id='userpwd2' placeholder='re-enter your password' onkeyup="return checkpass(); return false;">
                    <span id='conf_msg'></span>
                </div>
                <button type='submit' class='btn btn-success'>Submit</button>
        </form>
    </div>
</div>