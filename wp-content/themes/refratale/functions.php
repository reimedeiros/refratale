<?php
function load_scripts()
{

    wp_enqueue_script('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'), '1.0.0', false);
    wp_enqueue_script('style', get_template_directory_uri() . '/js/style.js', array('jquery'), '1.0', false);
    wp_enqueue_script('magnific', get_template_directory_uri(). '/js/magnific.js', array('jquery'), '1.0', false);
    

    wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('materialize-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('magnific', get_template_directory_uri(). '/css/magnific.css', array(), '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'load_scripts');

function refratale_config(){

	add_theme_support( 'custom-logo', array(
		'height' => 80,
		'width'  => 80,
	) );

	register_nav_menus(
		array(
			'top_menu' => 'Main Menu Top',
			'bottom_menu' => 'Main Menu Bottom',
		)
	);


}
add_action( 'after_setup_theme' , 'refratale_config' , 0 );
