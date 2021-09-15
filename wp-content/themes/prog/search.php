<?php /* Template name: Custom Search */ 

get_header();  ?>

<?php get_search_form(); ?>


<?php 
	if($_GET['s'] && !empty($_GET['s']))
		
	{
		$text = $_GET['s']; 
	}
?> 

    <div class="container">
		<div class="serch-page">
		<div class="row">

		<?php 
		$args = array(

			'post_type' => 'post', 
			'posts_per_page' => -1,
			's' => $text
		); ?>

		<?php
	   $query = new WP_Query($args); 
			
		if($query->have_posts()){

		while($query->have_posts()) : $query->the_post();

		?>
		
	
	 <div class="serch-con">
	    <p class="title-program">
			<a href="<?php the_permalink()?> " target="_blank">
							
			<img class="hvr-pop" src="<?php the_field("imge_pro_title") ?>" alt="<?php the_title(); ?> " /><?php the_title();?> <span class="v"><?php the_field("pro-v") ?></span></a>
		</p>
	</div>	
     
	 <?php endwhile;
			
		}else { 
		   
			echo '<p class="not-found">This Program is Not Found, Please Try using another word</p>'; 
		} ?>
			
<?php wp_reset_query(); ?>
			
</div> </div> </div>

<?php get_footer()?>

