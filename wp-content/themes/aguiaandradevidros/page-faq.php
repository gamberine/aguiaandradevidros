<?php /*Template Name: FAQ */get_header(); ?>
<div id="primary" class="content-area">
	<?php // Start the loop.while (have_posts()) : the_post();// Include the page content template.get_template_part('template-parts/content' , 'page' );// If comments are open or we have at least one comment, load up the comment template.if (comments_open() || get_comments_number()) {comments_template();}// End of the loop.endwhile;?>



    <section class="gridRelatorios text-center" id="servicos">
		<!-- <div class="container"> -->

	

		<div class="row boxListaServicos">
		
			<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
			<?php if(have_posts()):?>
			<?php while (have_posts()) : the_post(); $count++; ?>
			<!-- <div class="pb-5"> -->
			<?php $summary = get_field('texto_chamada_faq'); echo substr($summary, 0, 99999); ?>
			<!-- </div> -->
			<?php endwhile; ?>
			<?php endif;?>	
		
				
				
				
			</div>
		<!-- </div> -->
	</section>


</div>
<!--content-area -->
<?php get_footer(); ?>
