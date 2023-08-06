<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>



</header> 

<div class="gridBannerInternas">

	<?php $args = array(
                            'post_type' => 'banner',
                            'posts_per_page' => 1,
                            'order' => 'DESC',
							'orderby' => 'date',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category_banner',
                                    'field' => 'slug',
                                    'terms' => 'banner-interno',
                                    'hierarchical' => 0,
                                ),
                            ),
                        );
                        ?>
		<?php query_posts($args); ?>
		<?php if(have_posts()):?>
		<?php while (have_posts()) : the_post(); ?>
		
		<img class="bannerInternas" style="background:url(<?php the_field('imagem_banner');?>) #133b56d4; background-blend-mode: multiply;">
				
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query();?>


	<?php if ( is_singular() ) : ?>
	<?php the_title( '<h2 class="titleInternas">', '</h2>' ); ?>
	<?php else : ?>
	<?php the_title( sprintf( '<h2 class="titleInternas"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<?php endif; ?>
	<?php twenty_twenty_one_post_thumbnail(); ?>
</div>
