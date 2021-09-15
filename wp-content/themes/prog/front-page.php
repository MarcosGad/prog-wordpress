<?php get_header();  ?> 


<!-- cat --> 		
 <div class="container">
	 <div class="cat">
		 <?php 
				
					$values = array('post_type'=>'cat','order'=>'ASC'); 
					
					$query = new wp_query($values); 
				
					if($query->have_posts()){
						
						while($query->have_posts()){
							
							$query->the_post(); 	
				
			?>
		 
	 		<span class="span-cat hvr-buzz"><a href="#" data-scroll="<?php the_title() ?>"><?php the_title() ?></a></span>
		 
		 <?php } } ?> 
	 </div>
		 
</div>


<!-- cat --> 		
 <div class="container">
	 <div class="Advertisement">
		 	<div class="row">

		 <?php 
				
					$values = array('post_type'=>'adss','order'=>'ASC'); 
					
					$query = new wp_query($values); 
				
					if($query->have_posts()){
						
						while($query->have_posts()){
							
							$query->the_post(); 	
				
			?>
		 
	 		<div class="col-md-3 col-sm-3 hidden-xs">
				<div class="Advertisement-content">
					<?php the_content(); ?>
				</div>	
			</div>
		 
		 <?php } } ?> 
	 </div>
	 </div>
		 
</div>



<?php get_search_form(); ?>


<!-- start main --> 

<div class="container">

	<div class="col-md-6">
		  <div class="prog-new">

			<div class="panel-group">
				<div class="panel-info">
				  <div class="panel-heading no-open">
					<h4 class="panel-title">
						
						<?php 
				
					$values = array('post_type'=>'title','order'=>'ASC'); 
					
					$query = new wp_query($values); 
				
					if($query->have_posts()){
						
							
							$query->the_post(); 	
				
			         ?>
						
					  <a><span class="space"><i class="fas fa-<?php the_field("latest_software_icon") ?>"></i> <?php the_field("latest_software") ?></span> </a>
						
					<?php  } ?> 
					</h4>
				  </div>
				  <div id="collapse1" class="panel-collapse collapse in"> 
					<ul class="list-group">
					  
						<?php get_sidebar() ?> 

					</ul>

				  </div>
				</div>
			  </div>

		  </div>
	</div>
	
	<div class="col-md-6">
		  <div class="prog-new">

			<div class="panel-group">
				<div class="panel-info">
				  <div class="panel-heading no-open">
					<h4 class="panel-title">
					<?php 
				
					$values = array('post_type'=>'title','order'=>'ASC'); 
					
					$query = new wp_query($values); 
				
					if($query->have_posts()){
						
							
							$query->the_post(); 	
				
			         ?>
					  <a><span class="space"><i class="fas fa-<?php the_field("latest_software_download_icon") ?>"></i> <?php the_field("latest_software_download") ?></span> </a>
						
					<?php  } ?> 
					</h4>
				  </div>
				  <div id="collapse1" class="panel-collapse collapse in">
					    
					<ul class="list-group">
							<?php
								query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=6');
								if (have_posts()) : while (have_posts()) : the_post();
						
			                 ?>
						
						
							<li class="tool">
							<img class="img-new <?php the_field("img-new-tow") ?>" src="<?php echo get_template_directory_uri() . '/imgs/new.png' ?>" alt="..." />
							
							<a href="<?php the_permalink()?> " class="list-group-item" target="_blank">
							
						<img class="pro-img hvr-pop" src="<?php the_field("imge_pro_title") ?>" alt="<?php the_title(); ?> " /><?php the_title();?> <span class="v"><?php the_field("pro-v") ?></span></a>
						
							
						<span class="tooltiptext"><?php the_field("des_pro") ?></span>
							
						</li>
						
						
						
							<?php
							endwhile; endif;
							wp_reset_query();
							?>

					</ul>

				  </div>
				</div>
			  </div>

		  </div>
	</div>


</div>





<!-- end main --> 

<div class="container">
	
<div class="col-md-4">
	
	<!-- start Bro --> 
	
		  <div class="prog-new block">
			<div class="panel-group">
				<div class="panel-info">
				  <div class="panel-heading bro-one">
					<h4 class="panel-title">
					  <a class="open" id="Bro"><span class="space"><i class="fab fa-edge"></i> Bro One</span> </a>
					</h4>
				  </div>
					
				  <div class="panel-collapse collapse in cat-one">
					<ul class="list-group">
						
			<?php 
				
					$args = array('category_name'=>'bro','order'=>'ASC'); 
					
					$query = new wp_query($args); 
				
					if($query->have_posts()){
						
						while($query->have_posts()){
							
							$query->the_post(); 	
				
				?>
						
						
						<li class="tool">
							
							<img class="img-new <?php the_field("img-new-tow") ?>" src="<?php echo get_template_directory_uri() . '/imgs/new.png' ?>" alt="..." />
							
							<a href="<?php the_permalink()?> " class="list-group-item" target="_blank">
							
						<img class="pro-img hvr-pop" src="<?php the_field("imge_pro_title") ?>" alt="<?php the_title(); ?> " /><?php the_title();?> <span class="v"><?php the_field("pro-v") ?></span></a>
						
							
						<span class="tooltiptext"><?php the_field("des_pro") ?></span>
							
						</li>
						
						
						
				<?php } } ?> 
					  
					</ul>

				  </div>
				</div>
			  </div>

		  </div>
<!-- end bro --> 

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














