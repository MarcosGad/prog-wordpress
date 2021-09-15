<?php get_header();  ?> 

<?php get_search_form(); ?>

<!-- start single pro --> 

<div class="container">
	
	     <p class="title-program"> <?php the_title();?> <?php the_field("pro-v") ?> </p>
	
	<div class="single-pro">
	<div class="row">
		<?php
		if(have_posts()){
			while(have_posts()){
				the_post();
		?>
		
		
		<div class="col-md-4 col-xs-12">
			<div class="img-pro-single">
			
			   <img src="<?php the_field("imge_pro_title") ?>" alt="<?php the_title(); ?> " />
				
			</div>
		</div>
	    <div class="col-md-8 col-xs-12">
				
			<div class="single-content">
				<?php the_content(); ?> 
			</div>
		
		</div>
	 
	</div>
	</div>
	
	<h1 class="ser-name"><?php the_field("server_name") ?></h1>
	<div class="down">
		
		<p><a target="_blank" href="<?php update_option('home',the_field("download_url")) ?>"><i class="fas fa-download"></i> Download Here</a></p>
	
	</div>
	
	
	<!-- server two  -->
	
	<input style="display: none" class="to" value="<?php the_field("download_url_two") ?>">
	
	<hr class="hr-single too" style="display: none">
	
	<h1 class="ser-name"><?php the_field("server_name_two") ?></h1>
	
	
	<div class="down too" style="display: none">
		
		<p><a target="_blank" href="<?php the_field("download_url_two") ?>"><i class="fas fa-download"></i> Download Here </a></p>
	
	</div>
			

	<?php } } ?>
	
	<!--  comments --> 
	<?php 	comments_template();  ?>
	
	
</div>
<!-- end single pro --> 
	
	
<?php 

setPostViews(get_the_ID());

?> 
<?php get_footer()?>
	
	
	
	
	
	
	
	