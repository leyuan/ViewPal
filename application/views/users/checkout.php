<h2>Viewpal Checkout</h2>
<!--Check if user is logged in-->
<?php session_start(); ?>
	<div id="profile">
    	<?php if(isset($_SESSION['user_name'])){?>
			You are logged in as <?php echo $_SESSION['user_name']?>;
			<a href='<?php echo base_url()."index.php/users/logout"?>' id='logout'>Logout</a>
		<?php }else {?>
            You are not logged in yet, try log in via
            <a class="modal_trigger" href="#modal" value=''>ViewPal</a>
        <?php } ?>
	</div>  

<?php
    echo $this->input->post('merchant_id');    
?>
    <div class='transac_details'>
        <h3>host:                http://www.example.com</h3>
        <h3>cost:                <?php echo $this->input->post('item_cost')?></h3>
        
        <input type="btn btn-primary" class='btn btn-primary' value='submit'>
    </div>




<!--------------------Pop Up-------------------------------->
<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">ViewPal Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Username & Password Login form -->
			<div class="user_login">
				<form>
					<label>Email / Username</label>
					<input type="text" id='vp_user' />
					<br />

					<label>Password</label>
					<input type="password" id='vp_pwd' />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half "><a href="#" id="register_form" class="btn btn-primary">Sign up</a></div>
						<div class="one_half last"><a href="#" id='vp_login' class="btn btn_red">Login</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form>
					<label>Full Name</label>
					<input type="text" />
					<br />

					<label>Email Address</label>
					<input type="email" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">Send me occasional email updates</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
					</div>
				</form>
			</div>
            
            <!-- User Account Summary -->
			<div class="user_summary">
                Name:<span id='vp_user_back'></span><br>
                Balance:<span id='vp_user_balance'></span><br>
			</div>            
		</section>
	</div>
