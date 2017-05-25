<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<title>Around the World</title> <!-- Make Title dynamic -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
	
		<header style="background:url('<?php echo $backgroundImg[0]; ?>')">
			<div class="header-content">
				<div class="wrapper">
					<div class="logo">
						<a href="<?php echo esc_url( home_url('/') ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Around the World Logo">
						</a>
					</div> <!-- logo -->
			
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
					</nav>
				</div> <!-- wrapper -->
			</div> <!-- header-content -->
		</header>
		
		<div class="wrapper">