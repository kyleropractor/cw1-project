<?php

function carshop_script_enqueue() {

/*added style files*/
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.0.0', 'all');

/*added js files*/
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array(), '4.0.0', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/carshop.js', array(), '1.0.0', true);

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/carshop.css', array(), '1.0.0', 'all');

}
add_action('wp_enqueue_scripts', 'carshop_script_enqueue');

/*activate menus*/
function carshop_theme_setup () {

  add_theme_support('menus');

  register_nav_menu('primary','Primary Header Navigation');
  register_nav_menu('secondary','Footer Navigation');
}

add_action('init', 'carshop_theme_setup');

/*theme support*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside', 'image', 'video'));

/*sidebar function*/

function carshop_widget_setup() {

	register_sidebar(
		array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

}
add_action('widgets_init','carshop_widget_setup');
