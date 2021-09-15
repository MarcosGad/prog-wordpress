<?php get_header();  ?>




<img class="contect-img" src="<?php echo get_template_directory_uri() . '/imgs/contact-us.jpg' ?>" alt="">

<div class="container-fluid">
	<div class="contect">
		
		<?php echo do_shortcode('[contact-form-7 id="181" title="Contact form 1"]');  ?> 
		
		<!--
	  <div class="input-group input-group-lg">
		  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-user fa-fw"></i></span>
		  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
	  </div>
		
	  <div class="input-group input-group-lg">
		  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-envelope fa-fw"></i></span>
		  <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
	  </div>
		
		
		<div class="input-group input-group-lg">
		  <span class="input-group-addon" id="basic-addon1"><i class="fas fa-phone fa-fw"></i></span>
		  <input type="text" class="form-control" placeholder="Phone" aria-describedby="basic-addon1">
	    </div>
		
		<div class="form-group">
		  <textarea class="form-control message" placeholder="Message"></textarea>
	    </div>
		
		<input class="btn btn-success contact-send" type="submit" value="Send Message" /> 
		<i class="fas fa-share-square fa-fw send-icon"></i>
		-->
	</div> 
</div>






<?php get_footer()?>
