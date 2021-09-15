<!doctype html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset')?>"/>	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|','true','right')?><?php bloginfo('name')?></title>	
<link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>

<?php wp_head();?>
	

	
</head>
	<body> 
		
	
<?php global $user_ID, $user_identity; if (!$user_ID) { ?>
		
				
<!-- start upper --> 
<div class="upperr">	
<div class="container">
	<div class="upper">
		<a href="" class="login" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-user-lock"></i> <span class="hidden-xs">Login </a>
	</div>		
	
	<div class="lang">
           <?php pro_lang();  ?> 
	</div>
		
   </div>
</div>		

<!-- end upper --> 
	
	
	

	

				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<a type="button" class="close-cust" data-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a>
						  
						<h4 class="modal-title" id="exampleModalLabel"><i class="far fa-id-card"></i> Login </h4>
					  </div>
					  <div class="modal-body">
						  
						  <?php $register = $_GET['register']; $reset = $_GET['reset']; if ($register == true) { ?>

							<h3>Success!</h3>
							<p>Check your email for the password and then return to log in.</p>

							<?php } elseif ($reset == true) { ?>

							<h3>Success!</h3>
							<p>Check your email to reset your password.</p>

							<?php } ?> 
						  
						  
						<form method="post" action="<?php bloginfo('url') ?>/wp-login.php">
						  <div class="row user-nav">
							  <div class="col-xs-12 col-lg-12">
								  <input type="text" class="form-control user-nav-xs" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="recipient-name" tabindex="11" placeholder="Username or Email" />
							  </div>
						  </div>
							
						 <div class="row pass-nav">
							  <div class="col-xs-12 col-lg-12">
								 <input type="password" name="pwd" value="" size="20" class="form-control user-nav-xs" id="recipient-name" tabindex="12" placeholder="Password"/>

							  </div>
						  </div>
							<div class="login_fields">
								<div class="rememberme">
									<label for="rememberme">
										<input type="checkbox" name="rememberme" value="forever" checked="checked" id="rememberme" tabindex="13" /> Remember me
									</label>
								</div>
							</div>						  
					  </div>
					  <div class="modal-footer">
						  <a href="<?php echo home_url() ?>/signin"><p class="btn btn-nav-sign">Sign In</p></a>
				  <?php do_action('login_form'); ?>
			      <input type="submit" name="user-submit" value="<?php _e('Login'); ?>" tabindex="14" class="btn btn-nav-login" />
						 <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
					     <input type="hidden" name="user-cookie" value="1" />
					  </div>
				</form>
					</div>
				  </div>
				</div>
	<?php 
		} else {   ?>
	
	
	<div class="sidebox">
		<div class="container">
		<div class="usericon">
			<?php global $userdata; echo get_avatar($userdata->ID, 25); ?>
		</div>
		<h4>Welcome, <?php echo $user_identity; ?></h4>
		<span class="userinfo"> <a href="<?php echo wp_logout_url('index.php'); ?>">Log out</a> </span>
			
		
		<div class="lang lang-withlog">
           <?php pro_lang();  ?> 
	    </div>
			
      </div>
	</div>
        					

	<?php } ?>
	
 
	
	
	
 
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="75">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<a class="navbar-brand" href="<?php bloginfo('url')?>">
				  
		</a> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
		<div class="nav navbar-nav navbar-right s-h">
		<form action="<?php echo home_url( '/' ); ?>" method="get">
		 <div class="search-hide">
		 <div class="search-cont-hide">
			<div class="searchbar pull-left">
			  <input class="search_input" type="text" name="s" placeholder="Search...">
			  <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
			</div>
		  </div>
        </div>
	    </form>
		</div>
		
      
      <ul class="nav navbar-nav navbar-right">
		  
		  
		  <?php  pro_bootstrap_menu(); ?>
		  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
		
</nav>
	
<div class="facebook-like">
	
<!-- fram --> 
<iframe class="hidden-xs" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=51&layout=box_count&action=like&size=small&show_faces=true&share=true&height=65&appId" width="51" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

<!-- fram --> 

</div>
		



		
		
		



