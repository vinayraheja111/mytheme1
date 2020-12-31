<?php
function mytheme()
{
	//stylesheet
	wp_enqueue_style('main_style',get_stylesheet_uri());
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');

}
//attach with Hooks
add_action('wp_enqueue_scripts','mytheme');
// This theme uses wp_nav_menu() in one location.
  function mytheme_menu()
  {
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'mytheme' ),
			)
		);

}
//attach with Action Hook
add_action('init','mytheme_menu');
?>