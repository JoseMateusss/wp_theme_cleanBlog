<?php
//includes
require get_template_directory(). "/include/setup.php";	

//hooks
add_action("wp_enqueue_scripts", "mt_theme_styles");
add_action("after_setup_theme", "mt_after_setup");