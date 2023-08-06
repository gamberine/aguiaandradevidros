<?php /*Template Name: Produtos*/get_header(); ?>
<div id="primary" class="content-area">
	<?php // Start the loop.while (have_posts()) : the_post();// Include the page content template.get_template_part('template-parts/content' , 'page' );// If comments are open or we have at least one comment, load up the comment template.if (comments_open() || get_comments_number()) {comments_template();}// End of the loop.endwhile;?>

	<div class="rowSubTitle">
	<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
			<?php if(have_posts()):?>
			<?php while (have_posts()) : the_post(); $count++; ?>
			<!-- <div class="pb-5"> -->
			<?php $summary = get_field('texto_chamada_produtos'); echo substr($summary, 0, 480); ?>
			<!-- </div> -->
			<?php endwhile; ?>
			<?php endif;?>	
	</div>
	<section class="gridEspecialidades sectionMenor">
		<div class="container">
			<div class="row">

				<?php query_posts("post_type=produtos&order=ASC&posts_per_page=-1" ); ?>
				<?php if(have_posts()):?>
				<?php while (have_posts()) : the_post(); $count++; ?>
				
				<div class="divPageConsultoria col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
					
				<a href="<?php the_field('link_btn_saiba_mais');?>" class="linkBoxProdutos" target="_blank">
					<div class="produtoBox">
						<!-- <div> -->
						<img class="imgProduto" src="<?php the_field('imagem_produto');?>"/>
						<!-- </div> -->
						<h3 class="tituloPadrao red">
							<?php the_title();?></h3>
						<p class="text-center">
							<?php the_field('descricao_do_produto' );?></p>
				</a>
					</div>
					<a href="<?php the_field('link_btn_saiba_mais');?>" class="btnSecundario" target="_blank">
						Saiba mais  
					</a>
				</div>
				<?php endwhile; ?>
				<?php endif;?>
				<?php wp_reset_query();?>
			</div>
		</div>
	</section>
	<section class="gridPageConsultoria btg sectionMenor">
		<div class="container">
			<div class="row">
				<div class="rowEspecialidades col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h2 class="tituloPadrao">Produtos e Serviços BTG Pactual</h2>
					
					<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
					<?php if(have_posts()):?>
						<?php while (have_posts()) : the_post(); $count++; ?>
						<?php $summary = get_field('texto_chamada_produtos_btg'); echo substr($summary, 0, 480); ?>
						<?php endwhile; ?>
						<?php endif;?>	
						
						
						<div class="row">

				<?php query_posts("post_type=produtos-btg&order=ASC&posts_per_page=-1" ); ?>
				<?php if(have_posts()):?>
				<?php while (have_posts()) : the_post(); $count++; ?>
				
				<div class="divPageConsultoria col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
					
				<a href="<?php the_field('link_btn_saiba_mais_btg');?>" class="linkBoxProdutos" target="_blank">
					<div class="produtoBox">
						<!-- <div> -->
						<img class="imgProduto" src="<?php the_field('imagem_produto_btg');?>"/>
						<!-- </div> -->
						<h3 class="tituloPadrao red">
							<?php the_title();?></h3>
						<p class="text-center">
							<?php the_field('descricao_do_produto_btg' );?></p>
				</a>
					</div>
					<a href="<?php the_field('link_btn_saiba_mais_btg');?>" class="btnSecundario" target="_blank">
						Saiba mais  
					</a>
				</div>
				<?php endwhile; ?>
				<?php endif;?>
				<?php wp_reset_query();?>
			</div>
			</div>
			</div>
		</div>
	</section>
	<section class="gridVamos">
		<div class="container">
			<div class="row mt-0">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<i class="fas fa-comment-dots"></i>
					<h2 class="tituloPadrao mb-0 colorTextos">Vamos conversar?</h2>
				</div>
			</div>
		<div>
				<a target="_blank" href="https://www.nozinvestimentos.com.br/noz/home#contato" class="btnPadrao">
				Preencha o formulário que iremos entrar em contato
				</a>
			</div>
		</div>
	</section>
</div>
<!--content-area -->
<?php get_footer(); ?>
