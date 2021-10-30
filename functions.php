<?php



require_once(get_template_directory().'/inc/enqueue.php');
require_once(get_template_directory().'/inc/theme-setup.php');
require_once(get_template_directory().'/inc/custom-widgets.php');
require_once(get_template_directory().'/inc/admin-share.php');
require_once(get_template_directory().'/inc/activation.php');
require_once(get_template_directory().'/inc/custom-protfolio.php');
require_once(get_template_directory().'/inc/custom-metabox.php');
require_once(get_template_directory().'/theme-options/ReduxCore/framework.php');
require_once(get_template_directory().'/theme-options/sample/config.php');
require_once(get_template_directory().'/inc/merabox-filter.php');
require_once(get_template_directory().'/inc/customize.php');




function hello_excerpt_length(){
	
	return 10;
	
	
}

add_filter('excerpt_length','hello_excerpt_length');



function hello_my_site(){
	add_theme_support('title-tag');
	
	
}

add_action('after_setup_theme','hello_my_site');
?>


