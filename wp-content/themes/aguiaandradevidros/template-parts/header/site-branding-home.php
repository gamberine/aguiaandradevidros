<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<div class="site-branding">
<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php if ( has_custom_logo() && $show_title ) : ?>
	<div class="site-logo">
    <img class="logoHome logoPadrao" src="<?php bloginfo('template_directory'); ?>/imagens/logo-clara.png"/>
    <img class="logoHome logoSuspensa" src="<?php bloginfo('template_directory'); ?>/imagens/logo-clara.png"/>
    </a>
    <!-- <img class="logoHome" /> -->
    </div>
<?php endif; ?>

</div><!-- .site-branding -->