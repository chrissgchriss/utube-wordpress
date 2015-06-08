<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Awesome Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<body>
            
            <?php wp_nav_menu(array('theme_location'=>'primary'));?>
            <div style="width: 200px; height: 175px; border: thin solid red; overflow: hidden;">
            <img src="<?php header_image(); ?>"
            height="<?php echo get_custom_header()->height; ?>"
            width="<?php echo get_custom_header()->width; ?>" alt="" /></div>