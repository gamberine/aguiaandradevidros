<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#058ebe">
	<meta name="apple-mobile-web-app-status-bar-style" content="#058ebe">
	<meta name="msapplication-navbutton-color" content="#058ebe">
	<?php wp_head(); ?>
	
	 <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">	 
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-icons.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">



</head>

<body <?php body_class(); ?>>
<div id="loading" style="display: none;">
   <div class="lds-ripple"><div></div><div></div></div>
</div>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header-home' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
