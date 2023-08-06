<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

	<header class="page-header alignwide">
		<h1 class="page-title error404"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p class="text-center" style="line-height: 1;">Parece que nada foi encontrado neste local. <br /> Que tal tentar uma pesquisa?</p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
get_footer();
