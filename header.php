<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flatlatte
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta
	name="description"
	content="Desarrollo Web para Emprendedores Creativos y Artistas"
	/>
	<meta
	name="keywords"
	content="Desarrollo Web Emprendedores Creativos Artistas Musicos Diseñadores"
	/>
	
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<link href="/favicon/apple-touch-icon.png" rel="apple-touch-icon" />
	
	<link href="https://fonts.googleapis.com" rel="preconnect" />
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
	<link
	href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
	rel="stylesheet"
	/>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo d-flex align-items-center">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-black-a.png" alt="logo flat latte mug">
				</a>

				<nav id="site-navigation"  class="navmenu">
						<?php
						wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'navmenu',
								'fallback_cb' => '__return_false',
								'items_wrap' => '<ul class="d-flex align-items-center mb-0">%3$s</ul>',
								'depth' => 2,
						));
						?>

						<a class="btn-nav px-0" href="<?php echo esc_url(home_url('/contacto')); ?>" aria-controls="primary-menu" aria-expanded="false">Un café y hablamos</a>
				</nav>
			</div>
    </header>

		<main class="main">