<?php /*Template Name: Relatórios*/get_header(); ?>
<div id="primary" class="content-area">
	<?php // Start the loop.while (have_posts()) : the_post();// Include the page content template.get_template_part('template-parts/content' , 'page' );// If comments are open or we have at least one comment, load up the comment template.if (comments_open() || get_comments_number()) {comments_template();}// End of the loop.endwhile;?>

	<div class="rowSubTitle">
	<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
			<?php if(have_posts()):?>
			<?php while (have_posts()) : the_post(); $count++; ?>
			<!-- <div class="pb-5"> -->
			<?php $summary = get_field('texto_chamada_relatorios'); echo substr($summary, 0, 480); ?>
			<!-- </div> -->
			<?php endwhile; ?>
			<?php endif;?>	
	</div>

    <section class="gridRelatorios text-center" id="servicos">
		<div class="container">
			<div class="row boxListaServicos">

				<?php query_posts("post_type=post&order=DESC&orderby=date&posts_per_page=100" ); ?>
				<?php if(have_posts()):?>
				<?php while (have_posts()) : the_post();?>
				
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					<!-- <a href="< ?php the_permalink();?>" style="margin-bottom:20px"> -->
					<a target="_blank" href="<?php the_field('url_servico' )?>" style="margin-bottom:20px">
					<div class="borderAbsoluteComum"/></div>
						<img src="<?php the_field('imagem_destaque_home');?>"/>
						<h4 class="nomeServico"><?php the_title();?></h4>
					</a>
					
					<center class="big"><h3><?php the_title();?></h3></center>
					<center><?php the_field('texto-servico' )?></center>
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
