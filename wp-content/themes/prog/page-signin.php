<?php get_header();  ?>


<div class="wp_login_error">
		
	<?php if( isset( $_GET['reeset'] ) && $_GET['reeset'] == 'failed' ) { ?>
				<p class="error">The Email Or Username you Entered is Incorrect, Please try again.</p>			
	<?php } ?> 
	
	
	<?php if( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) { ?>
				<p class="error">The Password you Entered is Incorrect, Please try again.</p>			
	<?php }
	
	
		else if( isset( $_GET['login'] ) && $_GET['login'] == 'empty' ) { ?>
				<p class="error">Please Enter Both Username and Password.</p>
	<?php }
	
	else if( isset( $_GET['reeset'] ) && $_GET['reeset'] == 'empty' ) { ?>
				<p class="error">Please Enter Both Username Or Email.</p>
	<?php } ?>
	
		<?php
				  if(defined('REGISTRATION_ERROR'))
					foreach(unserialize(REGISTRATION_ERROR) as $error)
					  echo "<div class=\"error\">{$error}</div>";
				  // errors here, if any

				  elseif(defined('REGISTERED_A_USER'))
					echo '<div class="succes">Email has been sent to '.REGISTERED_A_USER . '</div>';
		?>
			
</div>  

<?php global $user_ID, $user_identity; if (!$user_ID) { ?>

<div class="container">
	<div class="sign-in">
		
		<div class="row">
			<div class="col-sm-6 col-xs-12">

			
		<form class="signin" method="post" id="register-form" action="<?php echo add_query_arg('do', 'register'); ?>">


				<!-- ENTER ACCOUNT DETAILS -->
				<h4>Account Details</h4>
				
			<div class="form-group form-group-lg">

				<input type="text" name="email" class="form-control" value="" placeholder="Email" />
				
			</div>
					
			<div class="form-group form-group-lg">

				<input type="text" name="user" class="form-control" value="" placeholder="Username"/>
				
			</div>

			<div class="form-group form-group-lg">
				
				<input type="password" name="pass1" class="form-control" value="" placeholder="Password" />
				
			</div>
					
			<div class="form-group form-group-lg">

				<input type="password" name="pass2" class="form-control" value="" placeholder="Confirm Password" />
				
			</div>

				<!-- REGISTER BUTTON -->
				<input class="b-si btn btn-lg" type="submit" value="REGISTER" />

				</form>
	
			
			</div>
			<div class="col-sm-6 col-xs-12">
			
				
				<div id="login-register-password">


						<div id="tab3_login" class="tab_content_login">
							<h3>Lose something?</h3>
							<p>Enter your username or Email to reset your password</p>
							<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
								<div class="username">
									<label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
									<div class="form-group form-group-lg">
									<input class="form-control" type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" placeholder="Username or Email" />
									</div>
								</div>
								<div class="login_fields">
									<?php do_action('login_form', 'resetpass'); ?>
									<input type="submit" name="user-submit" value="<?php _e('Reset my password'); ?>" class="user-submit Reset-password btn btn-lg" tabindex="1002" />
									<?php $reset = $_GET['reset']; if($reset == true) { echo '<p>A message will be sent to your email address.</p>'; } ?>
                                    <div class="form-group form-group-lg">
									<input class="form-control" type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?reset=true" />
									</div>
									<div class="form-group form-group-lg">
									<input class="form-control" type="hidden" name="user-cookie" value="1" />
									</div>
								</div>
							</form>
						</div>
					</div>

					<?php } ?>
			
			</div>
		</div>
	
	</div>
</div>



<!-- start scroll-to-top --> 

 
<ul class="scroll-to-top">
      <a href="#">
		<li><i class="fa fa-arrow-up"></i></li>
	  </a>
</ul>


<!-- end scroll-to-top --> 


<?php get_footer()?>
