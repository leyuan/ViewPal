<?php echo validation_errors(); ?>

<?php echo form_open('users/create') ?>

    <select id="signup-select" name="signup-select" class="form-control vp-select">
        <option value="user">User</option>
        <option value="webmaster">Webmaster</option> 
    </select>

    <br>
    <input type="text" class="form-control vp-input1" name="name" placeholder="Name:"><br>
    <div id="webmaster-signup">
        <input type="text" class="form-control vp-input2" name="url" size="80" placeholder="Site Url:www.your-domain.com">
    </div>
    
    <div id="user-signup">
        <!--
        <input type='password' class='form-contrl vp-input1' name='password' size='80' placeholder="password">
        <input type='password' class='form-contrl vp-input1' name='password' size='80' placeholder="password">
        -->
        <input type="text" class="form-control vp-input2" name="balance" size="80" placeholder="Balance(like:10)">
    </div>
    
    <br>
	<input type="submit" name="submit" class="btn-success signup-btn" value="Sign Up"/>

</form>
