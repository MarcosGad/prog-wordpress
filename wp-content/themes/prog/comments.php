

<?php 
   if (comments_open()) {
 ?>
<?php
   echo '<ul class="list-unstyled comments-list">';
     $comments_arguments = array(

      'max_depth' => 3,
      'type' => 'comment',
      'avatar_size' => 64

     ); 

     wp_list_comments($comments_arguments);//list all comments
	echo '</ul>';
	  $commentform_arguments=array(
	  'title_reply'=>'Add Your Comment',//change add comment text
	  'title_reply_to'=>'Add a Reply to [%s]',//change add reply to text
	  'class_submit'=>'btn btn-primary btn-md',//change submit button class
	  'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will be Waiting for approved and comment.','text-domain' ) .'</p>',
	  );
	   comment_form($commentform_arguments);
}else{
	echo 'Sorry Comments are Disabled';
}





 



