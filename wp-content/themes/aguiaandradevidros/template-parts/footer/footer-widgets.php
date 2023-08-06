<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div class="container footer">
	<aside class="widget-area">
		
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php get_template_part( 'template-parts/footer/footer-contatos' ); ?>
		
	</aside><!-- .widget-area -->

	<div class="lineFooter"></div>
	<div class="textFooter">
		<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
		<?php if(have_posts()):?>
		<?php while (have_posts()) : the_post(); ?>

		<?php $summary = get_field('texto_apos_footer'); echo substr($summary, 0, 4980); ?>
		<?php endwhile; ?>
		<?php endif; ?>	
	</div>
</div>

<?php endif; ?>
