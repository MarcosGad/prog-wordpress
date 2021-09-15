
<?php get_header();  ?>

<!-- cat -->
 <div class="container">
	 <div class="cat">
		 <?php 
				
					$values = array('post_type'=>'android','order'=>'ASC'); 
					
					$query = new wp_query($values); 
				
					if($query->have_posts()){
						
						while($query->have_posts()){
							
							$query->the_post(); 	
				
			?>
		 
	 		<span class="span-cat hvr-buzz"><a href="#" data-scroll="<?php the_title() ?>"><?php the_title() ?></a></span>
		 
		 <?php } } ?> 
	 </div>
</div>

<?php get_search_form(); ?>







 

<!-- start scroll-to-top --> 

 
<ul class="scroll-to-top">
      <a href="#">
		<li><i class="fa fa-arrow-up"></i></li>
	  </a>
</ul>


<!-- end scroll-to-top --> 






<?php get_footer()?>



















