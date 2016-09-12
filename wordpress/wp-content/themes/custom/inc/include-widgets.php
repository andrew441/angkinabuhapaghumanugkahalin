<?php
if (function_exists('register_nav_menus')) 
{
	register_nav_menus(
		array(
		  'main_menu' => 'Main Menu',
		  'footer_menu' => 'Footer Menu'
		)
	);
}
if(function_exists('register_sidebar'))
{	
	register_sidebar(array(
		'id'=> 'main-sidebar',
		'name'=> 'Main Sidebar', 
		'description' => 'Main Sidebar Widget', 
		'before_widget' => '<div class="sidebarWidget">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>', 
		'after_title' => '</h3>'
	));
}

?>