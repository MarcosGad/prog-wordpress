  
<?php 

        if (is_active_sidebar('main-sidebar')){

            dynamic_sidebar('main-sidebar'); 
			
        }

  ?> 

<ul class="list-group">
	
	<?php
	$posts_args=array(
	'posts_per_page'=>6,
	);
	$query=new wp_query($posts_args);
	if($query->have_posts()){
		while($query->have_posts()){
			$query->the_post();?>
	
	        		<li class="tool">
							<img class="img-new <?php the_field("img-new-tow") ?>" src="<?php echo get_template_directory_uri() . '/imgs/new.png' ?>" alt="..." />
							
							<a href="<?php the_permalink()?> " class="list-group-item" target="_blank">
							
						<img class="pro-img hvr-pop" src="<?php the_field("imge_pro_title") ?>" alt="<?php the_title(); ?> " /><?php the_title();?> <span class="v"><?php the_field("pro-v") ?></span></a>
						
							
						<span class="tooltiptext"><?php the_field("des_pro") ?></span>
							
					</li>
		<?php
		}
		
		wp_reset_postdata(); 
	}
		?>
	
</ul>