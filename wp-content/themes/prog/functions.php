<?php 
//include navwalker class for bootstrap navigation menu
require_once('wp-bootstrap-navwalker.php');
//add feature image support
add_theme_support('post-thumbnails');
/*
*function to add my custom styles
*wp_enqueue_style()
*/
function prog_add_styles(){
	
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/all.min.css');
	wp_enqueue_style('hover.css',get_template_directory_uri().'/css/hover.css');
	wp_enqueue_style('animate.css',get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');
}
/*
*function to add my custom script
*wp_enqueue_script()
*/
function prog_add_scripts(){
	//remove registeration for old jquery
	wp_deregister_script('jquery');
	//register a new jquery in footer
	wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true);//register a new jquery in footer
	//enqueue the new jquery
	wp_enqueue_script('jquery');
	//add bootstrap script file
	wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
	//add wow file script
	wp_enqueue_script('wow.min.js',get_template_directory_uri().'/js/wow.min.js',array(),false,true);
	
	// this is my jquery 
	wp_enqueue_script('jquery-3.2.1.min.js',get_template_directory_uri().'/js/jquery-3.2.1.min.js',array(),false,true);
	
	
	//add nice scroll file script
wp_enqueue_script('jquery.nicescroll.min.js',get_template_directory_uri().'/js/jquery.nicescroll.min.js',array(),false,true);
	
	//add main file script
	wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),false,true);
	
	
	
	
	// add font-awesome
	wp_enqueue_script('font-awesome',get_template_directory_uri().'/js/all.min.js');
	//add html5shiv for old browsers
	wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.min.js');
	//add conditional comment for html5shiv
	wp_script_add_data('html5shiv','conditional','lt IE 9');
	//add respond script for old browser
	wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
	//add conditional comment for respond
	wp_script_add_data('respond','conditional','lt IE 9');
}



//add css styles
add_action('wp_enqueue_scripts','prog_add_styles');
//add js scripts
add_action('wp_enqueue_scripts','prog_add_scripts');

function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '', '4.7.0', 'all'); 
}

add_action('admin_init', 'fontawesome_dashboard');


function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Arvo', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );





/**
* Replaces "Post" in the update messages for custom post types on the "Edit"post screen.
* For example, for a "Product" custom post type, "Post updated. View Post." becomes "Product updated. View Product".
*
* @param array $messages The default WordPress messages.
*/

function pico_custom_update_messages( $messages ) {
global $post, $post_ID;

$post_types = get_post_types( array( 'show_ui' => true, '_builtin' => false ), 'objects' );

foreach( $post_types as $post_type => $post_object ) {

    $messages[$post_type] = array(
        0  => '', // Unused. Messages start at index 1.
        1  => sprintf( __( '%s updated. <a href="%s">View %s</a>' ), $post_object->labels->singular_name, esc_url( get_permalink( $post_ID ) ), $post_object->labels->singular_name ),
        2  => __( 'Custom field updated.' ),
        3  => __( 'Custom field deleted.' ),
        4  => sprintf( __( '%s updated.' ), $post_object->labels->singular_name ),
        5  => isset( $_GET['revision']) ? sprintf( __( '%s restored to revision from %s' ), $post_object->labels->singular_name, wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => sprintf( __( '%s published. <a href="%s">View %s</a>' ), $post_object->labels->singular_name, esc_url( get_permalink( $post_ID ) ), $post_object->labels->singular_name ),
        7  => sprintf( __( '%s saved.' ), $post_object->labels->singular_name ),
        8  => sprintf( __( '%s submitted. <a target="_blank" href="%s">Preview %s</a>'), $post_object->labels->singular_name, esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ), $post_object->labels->singular_name ),
        9  => sprintf( __( '%s scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview %s</a>'), $post_object->labels->singular_name, date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ), $post_object->labels->singular_name ),
        10 => sprintf( __( '%s draft updated. <a target="_blank" href="%s">Preview %s</a>'), $post_object->labels->singular_name, esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ), $post_object->labels->singular_name ),
        );
}

return $messages;
}
add_filter( 'post_updated_messages', 'pico_custom_update_messages' );





//register sidebar
function dmb_main_sidebar(){
	//register main sidebar
	register_sidebar(array(
		'name'=>'main sidebar',
		'id'  =>'main-sidebar',
		'description'=>'main sidebar appear every where',
		'class'=>'main-sidebar',
		'before_widget'=>'<div class="widget-content">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>'
	));
}
add_action('widgets_init','dmb_main_sidebar');


//register sidebar footer
function dmb_footer_sidebar(){
	//register footer sidebar
	register_sidebar(array(
		'name'=>'footer sidebar',
		'id'  =>'footer-sidebar',
		'description'=>'footer sidebar appear every where',
		'class'=>'footer-sidebar',
		'before_widget'=>'<div class="widget-content">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>'
	));
}
add_action('widgets_init','dmb_footer_sidebar');



// my dashboard 
/*
function my_admin_menu() {
	add_menu_page( 'My Top Level Menu Example', 'Top Level Menu', 'manage_options', 'myplugin/myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-tickets', 6  );
}

add_action( 'admin_menu', 'my_admin_menu' );

function myplguin_admin_page(){
	?>
	<div class="wrap">
		<h2>Welcome To My vhgcgf</h2>
	</div>
	<?php
}
*/




function pro_register_custom_menu(){
	register_nav_menus(array(
	'bootstrap-menu'=>('Naviagation Bar'),
	'lang-menu'=>('lang Bar')
	));
}

function pro_bootstrap_menu(){
wp_nav_menu(array(
'theme_location'=>'bootstrap-menu',
'menu_class'    =>'nav navbar-nav navbar-right',
'container'     =>false,
'depth'         =>2,
'walker'        =>new wp_bootstrap_navwalker()
));
}

function pro_lang(){
wp_nav_menu(array(
'theme_location'=>'lang-menu',
'menu_class'    =>'',
'container'     =>false,
'depth'         =>2,
));
}


//register custom menus
add_action('init','pro_register_custom_menu');




/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}



// add nav cat 

	function create_nav_cat(){
		
		$values = array(
			
			'public' => true, 
			'labels' => array('name'=>'Our Cat',
							  'add_new'=>'Add Cat',
							  'singular_name'=>'Cat',
							  'add_new_item'=>'Add New Cat',
							  'edit_item'=>'Edit Cat',
							  'new_item'=>'New Cat',
							  'view_item'=>'View Cat',
							  'view_items'=>'View Cat',
							  'search_items'=>'Search Cat',
							   ), 
			  'menu_icon' => '',
		
		); 
		
		register_post_type('cat',$values); 
		
		
		
	}


add_action('init','create_nav_cat');



function fontawesome_icon_dashboard() {
   echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-cat div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f02c';
     }
     	</style>";
 }
add_action('admin_head', 'fontawesome_icon_dashboard');

function fontawesome_icon_dashboardd() {
   echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-android div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f02c';
     }
     	</style>";
 }

add_action('admin_head', 'fontawesome_icon_dashboardd');


function fontawesome_icon_dashboarddd() {
   echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-title div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f035';
     }
     	</style>";
 }

add_action('admin_head', 'fontawesome_icon_dashboarddd');


function fontawesome_icon_dashboardddd() {
   echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-adss div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f030';
     }
     	</style>";
 }

add_action('admin_head', 'fontawesome_icon_dashboardddd');


// add nav cat android

	function create_nav_cat_android(){
		
		$values = array(
			
			'public' => true, 
			'labels' => array('name'=>'Our Cat Android',
							  'add_new'=>'Add Android',
							  'singular_name'=>'Android',
							  'add_new_item'=>'Add New Android',
							  'edit_item'=>'Edit Android',
							  'new_item'=>'New Android',
							  'view_item'=>'View Android',
							  'view_items'=>'View Android',
							  'search_items'=>'Search Android',
							   ), 
			'menu_icon'=>'dashicons-admin-page',
			'supports'=> array('title'),
		
		); 
		
		register_post_type('android',$values); 
		
		
		
	}


add_action('init','create_nav_cat_android');



// add title  

	function create_title(){
		
		$values = array(
			
			'public' => true, 
			'labels' => array('name'=>'Our Title',
							  'add_new'=>'Add Title',
							  'singular_name'=>'Title',
							  'add_new_item'=>'Add New Title',
							  'edit_item'=>'Edit Title',
							  'new_item'=>'New Title',
							  'view_item'=>'View Title',
							  'view_items'=>'View Title',
							  'search_items'=>'Search Title',
							   ), 
			'menu_icon'=>'dashicons-admin-page',
			'supports'=> array(''),
		
		); 
		
		register_post_type('title',$values); 
		
		
		
	}


add_action('init','create_title');




// add ads  

	function create_adss(){
		
		$values = array(
			
			'public' => true, 
			'labels' => array('name'=>'ADSS',
							  'add_new'=>'Add ADSS',
							  'singular_name'=>'ADSS',
							  'add_new_item'=>'Add New ADSS',
							  'edit_item'=>'Edit ADSS',
							  'new_item'=>'New ADSS',
							  'view_item'=>'View ADSS',
							  'view_items'=>'View ADSS',
							  'search_items'=>'Search ADSS',
							   ), 
			'menu_icon'=>'dashicons-admin-page',
			'supports'=> array('editor'),
		
		); 
		
		register_post_type('adss',$values); 
		
		
		
	}

add_action('init','create_adss');






// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>

<?php
}


// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){ ?>

	 <ul class="list-group-ajax">

	<?php 
					  
    $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'post' ) );
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
			
		 <li><a href="<?php the_permalink()?> " target="_blank" title="<?php the_title(); ?>"><img class="pro-img-two" src="<?php the_field("imge_pro_title") ?>" alt="<?php the_title(); ?> " /><?php the_title(); ?> <span class="v"><?php the_field("pro-v") ?></span> </a></li>

        <?php endwhile;
	else : ?>
		 
	
	<p class="no-results">No results found ...</p>
    
<?php
        wp_reset_postdata();  
    endif; 
?>  

	</ul>
<?php 
    die();
		 
}





/******************* login error ********************************************************/ 

add_action( 'wp_login_failed', 'front_end_login_fail' );
function front_end_login_fail( $username  ) {
	
  $redirect_page = !empty ( $post ) ? get_permalink ( $post->ID ) : site_url();

$referrer = $_SERVER['HTTP_REFERER'];    
if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) {
    wp_redirect( $redirect_page . '/signin' . "?login=failed" ); 
    exit;
}

}



add_action( 'authenticate', 'check_username_password', 1, 3);
function check_username_password( $login, $username, $password ) {
	
  $redirect_page = !empty ( $post ) ? get_permalink ( $post->ID ) : site_url();

$referrer = $_SERVER['HTTP_REFERER'];

if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) { 
    if( $username == "" || $password == "" ){
		
        wp_redirect($redirect_page . '/signin' . "?login=empty" );
        exit;
    }
	
}

}




add_action('lostpassword_post', 'validate_reset', 99, 3);

function validate_reset(){
    if(isset($_POST['user_login']) && !empty($_POST['user_login'])){
        $email_address = $_POST['user_login'];
        if(filter_var( $email_address, FILTER_VALIDATE_EMAIL )){
            if(!email_exists( $email_address )){
                wp_redirect( 'signin/?reeset=failed' );
                exit;
            }
        }else{
                $username = $_POST['user_login'];
                if ( !username_exists( $username ) ){
                    wp_redirect( 'signin/?reeset=failed' );
                    exit;
                }
            }
    }else{
        wp_redirect( 'signin/?reeset=empty');
        exit;   
    }
}









/**
 * Registration form
 *
 */

add_action('template_redirect', 'register_a_user');
function register_a_user(){
  if(isset($_GET['do']) && $_GET['do'] == 'register'):
    $errors = array();
    if(empty($_POST['user']) || empty($_POST['email'])) $errors[] = 'provide a user and email';
    if(!empty($_POST['spam'])) $errors[] = 'gtfo spammer';
    if(!empty($_POST['pass1']) && !empty($_POST['pass2'])) $error[] = 'The passwords you entered do not match';

$account = esc_attr($_POST['account_type']);
    $user_login = esc_attr($_POST['user']);
    $user_email = esc_attr($_POST['email']);
 $user_pass = esc_attr($_POST['pass1']);
 $user_pass2 = esc_attr($_POST['pass2']);
    require_once(ABSPATH.WPINC.'/registration.php');

    $sanitized_user_login = sanitize_user($user_login);
    $user_email = apply_filters('user_registration_email', $user_email);

    if(!is_email($user_email)) $errors[] = 'invalid e-mail';
    elseif(email_exists($user_email)) $errors[] = 'this email is already registered, bla bla...';

    if(empty($sanitized_user_login) || !validate_username($user_login)) $errors[] = 'invalid user name';
    elseif(username_exists($sanitized_user_login)) $errors[] = 'user name already exists';

    if(empty($errors)):
 if ( $_POST['pass1'] == $_POST['pass2'] ) {

 $user_data = array (
        'user_login' => $sanitized_user_login,
        'user_password' => $user_pass,     
        'user_email' => $user_email,
        'role' => $account
    );

    // Create the user
    $user_id = wp_insert_user( $user_data );

} else { 
$errors[] = 'passwords dont match'; 
}


      if(!$user_id):
        $errors[] = 'registration failed...';
      else:
        wp_new_user_notification($user_id);
      endif;
    endif;

    if(!empty($errors)) define('REGISTRATION_ERROR', serialize($errors));
    else define('REGISTERED_A_USER', $user_email);
  endif;
}



/*
function login_redirect( $redirect_to, $request, $user ){
    return home_url('news.php');
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );
*/


    /**
     * add field to user profiles
     */
     class simple_local_avatars {
        function simple_local_avatars() {
            add_filter('get_avatar', array($this, 'get_avatar'), 10, 5);
            add_action('admin_init', array($this, 'admin_init'));
            add_action('show_user_profile', array($this, 'edit_user_profile'));
            add_action('edit_user_profile', array($this, 'edit_user_profile'));
            add_action('personal_options_update', array($this, 'edit_user_profile_update'));
            add_action('edit_user_profile_update', array($this, 'edit_user_profile_update'));
            add_filter('avatar_defaults', array($this, 'avatar_defaults'));
        }
    function get_avatar($avatar = '', $id_or_email, $size = '80', $default = '', $alt = false) {
        if (is_numeric($id_or_email))
            $user_id = (int) $id_or_email;
        elseif (is_string($id_or_email)) {
            if ($user = get_user_by_email($id_or_email))
                $user_id = $user->ID;
        } elseif (is_object($id_or_email) && !empty($id_or_email->user_id))
            $user_id = (int) $id_or_email->user_id;
        if (!empty($user_id))
            $local_avatars = get_user_meta($user_id, 'simple_local_avatar', true);
        if (!isset($local_avatars) || empty($local_avatars) || !isset($local_avatars['full'])) {
            if (!empty($avatar))
                return "<img src='https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y'/>";
            remove_filter('get_avatar', 'get_simple_local_avatar');
            $avatar = get_avatar($id_or_email, $size, $default);
            add_filter('get_avatar', 'get_simple_local_avatar', 10, 5);
            return $avatar;
        }
        if (!is_numeric($size))
            $size = '80';
        if (empty($alt))
            $alt = get_the_author_meta('display_name', $user_id);
        if (empty($local_avatars[$size])) {
            $upload_path = wp_upload_dir();
            $avatar_full_path = str_replace($upload_path['baseurl'], $upload_path['basedir'], $local_avatars['full']);
            $image_sized = image_resize($avatar_full_path, $size, $size, true);
            if (is_wp_error($image_sized))
                $local_avatars[$size] = $local_avatars['full'];
            else
                $local_avatars[$size] = str_replace($upload_path['basedir'], $upload_path['baseurl'], $image_sized);
            update_user_meta($user_id, 'simple_local_avatar', $local_avatars);
        } elseif (substr($local_avatars[$size], 0, 4) != 'http')
            $local_avatars[$size] = site_url($local_avatars[$size]);
        $author_class = is_author($user_id) ? ' current-author' : '';
        $avatar = "<img alt='" . esc_attr($alt) . "' src='" . $local_avatars[$size] . "' class='avatar avatar-{$size}{$author_class} photo' height='{$size}' width='{$size}' />";
        return $avatar;
    }

    function admin_init() {
        load_plugin_textdomain('simple-local-avatars', false, dirname(plugin_basename(__FILE__)) . '/languages/');
        register_setting('discussion', 'simple_local_avatars_caps', array($this, 'sanitize_options'));
        add_settings_field('simple-local-avatars-caps', __('Local Avatar Permissions', 'simple-local-avatars'), array($this, 'avatar_settings_field'), 'discussion', 'avatars');
    }

    function sanitize_options($input) {
        $new_input['simple_local_avatars_caps'] = empty($input['simple_local_avatars_caps']) ? 0 : 1;
        return $new_input;
    }

    function avatar_settings_field($args) {
        $options = get_option('simple_local_avatars_caps');
        echo '<label for="simple_local_avatars_caps">
            <input type="checkbox" name="simple_local_avatars_caps" id="simple_local_avatars_caps" value="1" ' . @checked($options['simple_local_avatars_caps'], 1, false) . ' />
            ' . __('Only allow users with file upload capabilities to upload local avatars (Authors and above)', 'simple-local-avatars') . '
        </label>';
    }

    function edit_user_profile($profileuser) {
        ?>
        <h3><?php _e('Avatar', 'simple-local-avatars'); ?></h3>
        <table class="form-table">
            <tr>
                <th><label for="simple-local-avatar"><?php _e('Upload Avatar', 'simple-local-avatars'); ?></label></th>
                <td style="width: 50px;" valign="top">
                    <?php echo get_avatar($profileuser->ID); ?>
                </td>
                <td>
                    <?php
                    $options = get_option('simple_local_avatars_caps');
                    if (empty($options['simple_local_avatars_caps']) || current_user_can('upload_files')) {
                        do_action('simple_local_avatar_notices');
                        wp_nonce_field('simple_local_avatar_nonce', '_simple_local_avatar_nonce', false);
                    ?>
                    <input type="file" name="simple-local-avatar" id="simple-local-avatar" /><br />
                    <?php
                    if (empty($profileuser->simple_local_avatar))
                        echo '<span class="description">' . __('No local avatar is set. Use the upload field to add a local avatar.', 'simple-local-avatars') . '</span>';
                    else
                        echo '<input type="checkbox" name="simple-local-avatar-erase" value="1" /> ' . __('Delete local avatar', 'simple-local-avatars') . '<br />
                            <span class="description">' . __('Replace the local avatar by uploading a new avatar, or erase the local avatar (falling back to a gravatar) by checking the delete option.', 'simple-local-avatars') . '</span>';
                    } else {
                        if (empty($profileuser->simple_local_avatar))
                            echo '<span class="description">' . __('No local avatar is set. Set up your avatar at Gravatar.com.', 'simple-local-avatars') . '</span>';
                        else
                            echo '<span class="description">' . __('You do not have media management permissions. To change your local avatar, contact the blog administrator.', 'simple-local-avatars') . '</span>';
                    }
                    ?>
                </td>
            </tr>
        </table>
        <script type="text/javascript">var form=document.getElementById('your-profile');form.encoding='multipart/form-data';form.setAttribute('enctype','multipart/form-data');</script>
        <?php
    }

    function edit_user_profile_update($user_id) {
        if (!wp_verify_nonce($_POST['_simple_local_avatar_nonce'], 'simple_local_avatar_nonce'))
            return;
        if (!empty($_FILES['simple-local-avatar']['name'])) {
            $mimes = array(
                'jpg|jpeg|jpe' => 'image/jpeg',
                'gif' => 'image/gif',
                'png' => 'image/png',
                'bmp' => 'image/bmp',
                'tif|tiff' => 'image/tiff'
            );
            $avatar = wp_handle_upload($_FILES['simple-local-avatar'], array('mimes' => $mimes, 'test_form' => false));
            if (empty($avatar['file'])) {
                switch ($avatar['error']) {
                    case 'File type does not meet security guidelines. Try another.':
                        add_action('user_profile_update_errors', create_function('$a', '$a->add("avatar_error",__("Please upload a valid image file for the avatar.","simple-local-avatars"));'));
                        break;
                    default:
                        add_action('user_profile_update_errors', create_function('$a', '$a->add("avatar_error","<strong>".__("There was an error uploading the avatar:","simple-local-avatars")."</strong> ' . esc_attr($avatar['error']) . '");'));
                }
                return;
            }
            $this->avatar_delete($user_id);
            update_user_meta($user_id, 'simple_local_avatar', array('full' => $avatar['url']));
        } elseif (isset($_POST['simple-local-avatar-erase']) && $_POST['simple-local-avatar-erase'] == 1)
            $this->avatar_delete($user_id);
    }

    function avatar_defaults($avatar_defaults) {
        remove_action('get_avatar', array($this, 'get_avatar'));
        return $avatar_defaults;
    }

    function avatar_delete($user_id) {
        $old_avatars = get_user_meta($user_id, 'simple_local_avatar', true);
        $upload_path = wp_upload_dir();
        if (is_array($old_avatars)) {
            foreach ($old_avatars as $old_avatar) {
                $old_avatar_path = str_replace($upload_path['baseurl'], $upload_path['basedir'], $old_avatar);
                @unlink($old_avatar_path);
            }
        }
        delete_user_meta($user_id, 'simple_local_avatar');
    }
}
$simple_local_avatars = new simple_local_avatars;

if (!function_exists('get_simple_local_avatar')):
    function get_simple_local_avatar($id_or_email, $size = '80', $default = '', $alt = false) {
        global $simple_local_avatars;
        return $simple_local_avatars->get_avatar('', $id_or_email, $size, $default, $alt);
    }
endif;

register_uninstall_hook(__FILE__, 'simple_local_avatars_uninstall');

function simple_local_avatars_uninstall() {
    $simple_local_avatars = new simple_local_avatars;
    $users = get_users_of_blog();
    foreach ($users as $user)
        $simple_local_avatars->avatar_delete($user->user_id);
    delete_option('simple_local_avatars_caps');
}



function move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'move_comment_field_to_bottom' );
















