<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-blog' );

	

	// Previous/next post navigation.
	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	$twentytwentyone_next_label     = esc_html__( 'Próximo', 'twentytwentyone' );
	$twentytwentyone_previous_label = esc_html__( 'Anterior', 'twentytwentyone' );

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav proximoPost">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p>',
			'prev_text' => '<p class="meta-nav anteriorPost">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p>', 
		)
	);
endwhile; // End of the loop.


get_footer();
