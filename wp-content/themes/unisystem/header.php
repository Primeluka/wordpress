<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/custom.css">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<div class="d-lg-none text-center">
		<img class="img-fluid" src="<?php echo get_bloginfo('template_directory').'/images/logo.png' ?>" alt="logo">
	</div>

	<nav class="navbar navbar-expand-md">
		<div class="container">
			<div class="navbar-brand d-none d-lg-block"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory').'/images/custom-logo.png' ?>"></div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>
				<?php
					wp_nav_menu([
						'menu'            => 'top',
						'theme_location'  => 'top',
						'container'       => 'div',
						'container_id'    => 'bs4navbar',
						'container_class' => 'collapse navbar-collapse',
						'menu_id'         => false,
						'menu_class'      => 'nav navbar-nav ml-lg-auto',
						'depth'           => 2,
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'          => new bs4navwalker()
					]);
				?>
			</div>
		</div>
	</nav>
</header>