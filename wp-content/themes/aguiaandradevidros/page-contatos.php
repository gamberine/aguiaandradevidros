<?php
/*
Template Name: Contatos
*/
get_header(); ?>
<div id="primary" class="content-area contatoPage"> 
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
			<section class="gridContato text-white sectionMenor">
			<div class="container">
				<div class="row" style="margin-bottom:0px">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<!-- <h2 class="tituloPadrao">Contatos</h2> -->
								<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
				<?php if(have_posts()):?>
				<?php while (have_posts()) : the_post(); $count++; ?>
					<p class="text-center">
						<?php the_field('texto_contatos' );?>
					</p>
					<?php endwhile; ?>
			<?php endif;?>
			<?php wp_reset_query();?>	
					</div>
				</div>
					</div>
						<div class="container60">
				<?php echo do_shortcode('[contact-form-7 id="97" title="Formulário de contato 1"]');?>
				</div>
			</section>
	</div>
	<!--content-area -->
	<?php get_footer(); ?>
