<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!-- < ?php get_template_part( 'template-parts/content/content-agende' ); ?> -->


</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

		<!-- <ul class="redesSociais redesSociaisFooter"></ul> -->

</div><!-- #page -->
<div class="footerDesenvolvedor"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
 <span>|</span> Copyright © 2023 - Todos os direitos reservados | Desenvolvido por <a href="https://gamberine.com.br" target="_blank">Gamberine Comunicação Visual</a> 
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
</body>
</html>


