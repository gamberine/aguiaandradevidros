<?php /*** Template part for displaying posts** @link https://developer.wordpress.org/themes/basics/template-hierarchy/** @package WordPress* @subpackage Twenty_Twenty_One* @since Twenty Twenty-One 1.0*/?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row mx-3">
		<div class="col-12">
			<div class="container descricaoSeguro">
				<?php the_title( '<h3 class="tituloPadrao text-left red mb-4">' , '</h3>' ); ?> 
				<div class="publicoAlvo mb-4">
					<p style="float:left; margin-bottom:0px !important; margin-right:5px;">
						<b>Público Alvo:</b>
					</p>
					<span class="categoriaSeguro"><?php /* translators: used between list items, there is a space after the comma. */$categories_list = get_the_category_list( __( 'e ' , 'twentytwentyone' ) );if ( $categories_list) {printf(/* translators: %s: list of categories. */''. esc_html__( ' %s', ' twentytwentyone' ) . ' ',						
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}
				?></span>
					<div class="simbolos simboloPf">
						<img src="<?php echo get_template_directory_uri();?>/imagens/simboloPf.png"/>
					</div>
					<div class="simbolos simboloPj">
						<img src="<?php echo get_template_directory_uri();?>/imagens/simboloPj.png"/>
					</div>
				</div>
					<p class="mb-2"><b>Sobre:</b></p>
					<p class="mb-4 pb-2"><?php the_field('texto-servico' )?></p>
					
					<p class="pt-2 mt-4 mb-2"><b>Seguradoras que comercializam este seguro:</b></p>
						<?php $featured_posts = get_field('seguradoras' );if( $featured_posts ): ?>
						<ul class="referenciaSeguradoras mb-4"><?php foreach( $featured_posts as $post ): // Setup this post for WP functions (variable must be named $post).setup_postdata($post); ?>
						<li>
							<a href="<?php the_field('link_do_site'); ?>" title="<?php the_title(); ?>">
								<img src="<?php the_field('logomarca'); ?>"/></a>
									</span>
							</li>
							<?php endforeach; ?>
				    </ul>
			    <?php 
				// Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata(); ?>
						<?php endif; ?>
				<p class="mb-4 pb-2"><b>Período / Duração:</b> <?php the_field("periodo_duracao" )?></p>
				<p class="mb-2"><b>Título Serviço:</b><?php the_field("titulo-servico" )?></p>

			<div class="p-2"> 
			<a style="margin-top: 57px !important;    display: table;" class="btnPadrao" target="_blank" href="https://api.whatsapp.com/send?phone=5531985150505?&text=Quatro%20Seguros%20-%20Cotação%20On%20line">Solicitar Cotação</a>
			</div>
			<?php wp_link_pages(array(' before'   => ' <nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
'after'    => '</nav>',
/* translators: %: page number. */
'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
)
);
?>
</div>
</div>
</div>
<!-- .entry-content -->
<!-- .entry-footer -->
<?php if ( ! is_singular( 'attachment' ) ) : ?>
<?php get_template_part( 'template-parts/post/author-bio' ); ?>
<?php endif; ?>
</article>
<!-- #post-<?php the_ID(); ?> -->
