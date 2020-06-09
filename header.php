<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seller_Insiders
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="header">
	<div class="overflow"></div>
	<div class="header__wrapper container">
		<a href="<?php echo get_home_url(); ?>" class="header__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
		</a>
		<div class="wrapper-right-block">
			<div class="mobile-logotype">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo menu">
			</div>

			<?php
				wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => 'header_menu', 
					'container'       => 'ul', 
					'menu_class'      => 'top-menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );
			?>
			<div class="button-recall open-modal">ОСТАВИТЬ ЗАЯВКУ</div>
		</div>
		<div class="mobile-burger">
			<span></span>
		</div>
	</div>
</header>