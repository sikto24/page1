<?php


function wp_setup() {

	load_theme_textdomain( 'wp', get_template_directory() . '/languages' );

	
	add_theme_support( 'automatic-feed-links' );


	add_theme_support( 'title-tag' );

	
	add_theme_support( 'post-thumbnails' );

	add_theme_support( "custom-logo" );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'wp' ),

			'menu-2' => esc_html__( 'Mobile', 'wp' ),
		)
	);

	
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wp_setup' );



function wp_theme_assets(){
	// Style
	wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', array(), time() , 'all');
	wp_enqueue_style( 'owlCarousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), time() , 'all');
	wp_enqueue_style( 'responisve', get_template_directory_uri(  ).'/assets/css/responsive.css', array(), time() , 'all');
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), time() , 'all');
	wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(),time());


	wp_enqueue_script( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', array('jquery'), time(), true );
	wp_enqueue_script( 'owlCarousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), time(), true );
	wp_enqueue_script( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js', array('jquery'), time(), true );
	wp_enqueue_script( 'main', get_template_directory_uri(  ). '/assets/js/main.js',array('jquery'), time(), true);
	wp_localize_script('main', 'post_title', get_the_title());

}
add_action('wp_enqueue_scripts' , 'wp_theme_assets');



// Add social links to user profile
function add_user_social_links($user) {
	?>
	<h3>Social Links</h3>

	<table class="form-table">
			<tr>
					<th><label for="facebook">Facebook</label></th>
					<td>
							<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>" class="regular-text" />
					</td>
			</tr>
			<tr>
					<th><label for="twitter">Twitter</label></th>
					<td>
							<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" />
					</td>
			</tr>

			<tr>
					<th><label for="instagram">instagram</label></th>
					<td>
							<input type="text" name="instagram" id="instagram" value="<?php echo esc_attr(get_the_author_meta('instagram', $user->ID)); ?>" class="regular-text" />
					</td>
			</tr>

			<tr>
					<th><label for="linkedin">linkedin</label></th>
					<td>
							<input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr(get_the_author_meta('linkedin', $user->ID)); ?>" class="regular-text" />
					</td>
			</tr>
	</table>
	<?php
}
add_action('show_user_profile', 'add_user_social_links');
add_action('edit_user_profile', 'add_user_social_links');


function save_user_social_links($user_id) {
	update_user_meta($user_id, 'facebook', sanitize_text_field($_POST['facebook']));
	update_user_meta($user_id, 'twitter', sanitize_text_field($_POST['twitter']));
	update_user_meta($user_id, 'instagram', sanitize_text_field($_POST['instagram']));
	update_user_meta($user_id, 'linkedin', sanitize_text_field($_POST['linkedin']));
}
add_action('personal_options_update', 'save_user_social_links');
add_action('edit_user_profile_update', 'save_user_social_links');


// Get Author Bio

function get_author_bio() {
	global $post;
	$author_id = $post->post_author;
	$author_name = get_the_author_meta('display_name', $author_id);
	$author_description = get_the_author_meta('description', $author_id);
	$author_avatar = get_avatar($author_id, 300);
	return array(
			'name' => $author_name,
			'avatar' => $author_avatar,
			'bio' => $author_description,
	);
}




