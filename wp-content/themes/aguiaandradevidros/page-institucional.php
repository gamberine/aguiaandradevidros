<?php /*Template Name: Institucional*/

get_header(); ?>
<div id="primary" class="content-area">
	<?php ?>
	<section class="gridQuem">
		<div class="container">
			<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
			<?php if(have_posts()):?>
			<?php while (have_posts()) : the_post(); ?>
		<div class="row d-flex flex-row justify-content-center align-items-center">
				<div class="relativeRight35 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
					<div class="borderImgAbsolute"></div>
					<div class="mascaraImg">
						<!-- <img class="imgQuem" src="< ?php bloginfo('template_directory'); ?>/imagens/breno_sobre.jpg"/> -->
						<img class="imgQuem" src="<?php the_field('imagem_sobre');?>"/>
				</div>
				</div>
				<div class="textoSobre col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
					<h2 class="tituloPadrao colorAzul" id="tituloPadraoMobile">Quem Somos</h2>
					<?php the_field('texto_quem' );?>
					<?php endwhile; ?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</section>
	<section class="gridFormacao">
	<div class="container">
	<?php query_posts("post_type=conteudo&posts_per_page=1" ); ?>
					<?php if(have_posts()):?>
					<?php while (have_posts()) : the_post(); ?>
		<div class="row">
			
			<div class="divValores col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="textGridMissao">
					<span class="iconAnimado iconMissao"></span>
					<h2 class="tituloPadrao colorAzul">Missão</h2>
					<?php the_field('descritivo_missao');?>
				</div>
			</div>
			<div class="divValores col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="textGridMissao">
					<span class="iconAnimado iconVisao"></span>
					<h2 class="tituloPadrao colorAzul">Visão</h2>
					<?php the_field('descritivo_visao');?>
				</div>
			</div>
			<div class="divValores col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="textGridMissao">
					<span class="iconAnimado iconValores"></span>
					<h2 class="tituloPadrao colorAzul">Valores</h2>
					<?php the_field('descritivo_valores');?>
				</div>
			</div>
			<!-- <div class="relativeRight35 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
			<div class="borderImgAbsolute"></div>
			<div class="mascaraImg">
				<img class="imgQuem" src="< ?php the_field('imagem_equipe_a');?>"/>
			</div>
			</div> -->
		</div>
		</div>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query();?>
	</section>




</div>
<!--content-area -->
<?php get_footer(); ?>