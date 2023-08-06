<?php
/*
Template Name: Blog
*/
get_header(); ?>

<div id="primary" class="content-area">
	<?php
	// Start the loop.
	while (have_posts()) : the_post();

		// Include the page content template.
		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) {
			comments_template();
		}

	// End of the loop.
	endwhile;
	?>

	<!-- <div class="rowSubTitle">
		< ?php query_posts("post_type=conteudo&posts_per_page=1"); ?>
		< ?php if (have_posts()) : ?>
			< ?php while (have_posts()) : the_post(); ?>
				< ?php $summary = get_field('texto-blog');
				echo substr($summary, 0, 480); ?>
			< ?php endwhile; ?>
		< ?php endif; ?>
	</div> -->


	<section class="gridBlog" id="blog">
		<div class="container">

			<div class="row boxListaPostagens">
					
				<?php query_posts("post_type=post&order=DESC&posts_per_page=-1" ); ?>
				<?php if(have_posts()):?>
				<?php while (have_posts()) : the_post(); ?>

							<div class="boxPosts col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
								<div class="cardPost">

								

									<a href="<?php the_permalink(); ?>" style="margin-bottom:20px">
										<!-- <div class="borderPostAbsolute"></div> -->
										<img src="<?php the_field('imagem_destaque_home'); ?>" />
										<!-- <h4 class="nomeServico">< ?php the_title(); ?></h4> -->
									</a>

									<div class="big postDetalhes"><h3><?php the_title(); ?></h3></div>
									<div class="postDetalhes"><?php $summary = get_field('texto-servico'); echo substr($summary, 0, 80); ?></div>
									<div class="dataBlog"><?php echo get_the_date(); ?></div>

								</div>
							</div>
				<?php endwhile; ?>
				<?php endif;?>
				<?php wp_reset_query();?>
				
			</div>

		</div>
	</section>



</div>
<!--content-area -->
<?php get_footer(); ?>