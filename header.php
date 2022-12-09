<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php wp_title();?></title>

<?php wp_head();?>

<link rel="shortcut icon" href="<?php bloginfo('url');?>/favicon.ico">



</head>

<body <?php body_class('');?>>
	
<div id="wrapper">

<header class="continer-fluid header">
	<div class="container">
		<div class="row middle-xs">
		
			<div class="col-xs-12 start-xs">	
					
					
				<div class="menu-outer">
					
				<a class="logo" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/images/logo.svg" alt="<?php bloginfo('name');?>"></a>
	
				
				<?php $defaults = array(
				'theme_location'  => 'header-menu-main',
				'menu'            => '',
				'container'       => false,
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'main-menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => ''
				);
				
				wp_nav_menu( $defaults );?>	
				
				
					<?php $defaults = array(
				'theme_location'  => 'header-menu-sub',
				'menu'            => '',
				'container'       => false,
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'secondary-menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => ''
				);
				
				wp_nav_menu( $defaults );?>	
				
					</div>
					
			</div>
			
		</div>
	</div>
</header>

