<?php
/**
 * The 404 page (Not Found) template file.
 * @package SongWriter
 * @since SongWriter 1.0.0
*/
get_header(); ?>

<div class="container">
     <h1 class="notfound">Nothing Found</h1> 
	
	 <img class="notfound-img" src="<?php echo get_template_directory_uri() . '/imgs/404.gif' ?>" alt="..." />
	
</div> 


<?php get_footer(); ?>