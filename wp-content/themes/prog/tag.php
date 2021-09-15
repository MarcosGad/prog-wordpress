<?php get_header(); ?> 

<div class="container">
 
	<div class="category">
          <div class="row">
			<div class="category-information text-center">
			<div class="col-sm-12">
			<h1 class="category-title"><?php single_tag_title()?></h1>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="blog">
		<div class="row">
			<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
		      ?>
			
				<div class="col-md-6 blog-content wow bounceInLeft hvr-float" data-wow-duration="3s" data-wow-offset="200" data-wow-iteration="1">
					<div class="blog-img">
					<?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title'=>'post image'])?>
					</div>
					 <div class="blog-head">
						 
								 <h4 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>			                     
						<div><?php the_excerpt()?></div>
						 
					<span class="post-author">
					<i class="fa fa-user fa-fw"></i><?php the_author_posts_link()?>	
					</span>
					<span class="post-date">
					<i class="fa fa-calendar fa-fw"></i><?php the_time('F j,Y')?>
					</span>
					<span class="post-comments">
					<i class="fa fa-comments-o fa-fw"></i>
					<?php comments_popup_link('0 Comments','One Comment','% Comments','comment-url','Comments Disabled')?>	
					</span>
					<br/>
					<span class="post-tags">
					<i class="fa fa-tags fa-fw"></i>
					<?php 
					if(has_tag()){
					the_tags();
					}else{
						echo 'there\'s no tags';
					}
					?>
					</span>
					<span class="post_categories">
					Category:
					<?php the_category(', ');?>
					</span>
				
					</div>
				</div>
			
			<?php 

				}

			}
			?>
			<div class="pagination-numbers">
                <?php echo numbering_pagination();?>
	        </div>
	    </div>
	
	</div>
	</div>
</div> 


<?php get_footer()?>
<script>new WOW().init();</script> 