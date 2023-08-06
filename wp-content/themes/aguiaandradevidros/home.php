<?php /*Template Name: Home*/ get_header('home'); ?>
<div id="primary" class="content-area">
	<?php ?>
	<!-- Início produtos -->
	<div class="contentServices">
		<?php query_posts("post_type=produtos&order=ASC&order_by=name&posts_per_page=-1"); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<a href="<?php the_field('link_do_produto') ?>">
				<div class="itemProduto">
					<img class="iconProduto" src="<?php the_field('icon_do_produto'); ?>" />
					<p class="textBtn"><?php the_title(); ?></p>
				</div>
			</a>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

	</div>
	<!-- fim produtos -->
	<!-- Início banner -->
	<div class="bannerVideo">
		<?php $args = array(
				'post_type' => 'banner',
				'posts_per_page' => 10,
				'order' => 'DESC',
				'orderby' => 'date',
				'tax_query' => array(
					array(
						'taxonomy' => 'category_banner',
						'field' => 'slug',
						'terms' => 'banner-home',
						'hierarchical' => 0,
					),
				),
			);
			?>
		<?php query_posts($args); ?>
		<?php if(have_posts()):?>
		<?php while (have_posts()) : the_post();  ?>
			
		<?php 
			$selecao = get_field('select_imagem_tipo');
			if($selecao == true){
				echo'
				<div class="slide-items" style="background-image: linear-gradient(to top, rgb(17 57 84 / 89%) 21%, rgb(52 98 129 / 91%) 56%, rgb(85 166 221 / 66%) 99%), url('.get_field('imagem_banner').'); width: 100%; background-size: cover; background-blend-mode: multiply;">
					
				';
			}
			else{
				echo'
				<div class="slide-items">
				<video autoplay muted loop>
					<source src="'.get_field('video_banner').'" type="video/mp4">
					</video>
					
					';
				}
				?>
				<div class="contentVideo">
						<h1><?php the_field('texto_grande' )?></h1>
						<p><?php the_field('texto_pequeno' )?></p>
				</div>
					
				</div>
				<?php endwhile; ?>
				<?php endif;?>
				<?php wp_reset_query();?>
				
				
	</div>
	<!-- fim banner -->	
	<section class="gridSobre">
		<div class="container">
			<?php query_posts("post_type=conteudo&posts_per_page=1"); ?>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post();
					 ?>
					<div class="row d-flex flex-row justify-content-center align-items-center">
						<div class="relativeRight35 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
							<div class="borderImgAbsolute"></div>
							<div class="mascaraImg">
								<img class="imgQuem" src="<?php the_field('imagem_sobre'); ?>" />
							</div>
						</div>
						<div class="textoSobreHome col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
							<h2 class="tituloPadrao">QUEM SOMOS</h2>
							<p>
							<?php $summary = get_field('texto_inicial_sobre'); echo substr($summary, 0, 530); ?>...
							<?php endwhile; ?>
							<?php endif; ?>
							</p>
							<a href="<?php bloginfo('home') ?>/institucional" class="btnSecundario">
								Saiba mais
							</a>

						</div>
					</div>
		</div>
	</section>

<section class="gridEspecialidades">
		<div class="container">
			<div class="row">
				<div class="rowEspecialidades col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h2 class="tituloPadrao">Conheça alguns dos nossos principais parceiros</h2>

					<?php query_posts("post_type=conteudo&posts_per_page=1"); ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $summary = get_field('texto_chamada_produtos'); echo substr($summary, 0, 480); ?>
						<?php endwhile; ?>
					<?php endif; ?>
					
					<div class="row">
						<div class="owl-carousel owl-theme">
							<?php query_posts("post_type=parceiros&order=ASC&posts_per_page=-1"); ?>
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post();
									?>
									<div class="item">
												<img class="logoParceiros" src="<?php the_field('imagem_parceiro'); ?>" />

									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_query(); ?>
						</div>
					</div>



				</div>

			</div>
		</div>
</div>
</section>

<section class="gridRelatorios text-center" id="servicos">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h2 class="tituloPadrao colorAzul">Blog da <span class="colorAmarelo">Protegido Agora</span></h2>
				<?php query_posts("post_type=conteudo&posts_per_page=1"); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php $summary = get_field('texto_chamada_relatorios');
						echo substr($summary, 0, 480); ?>
					<?php endwhile; ?>
				<?php endif; ?>


			</div>
		</div>
		<div class="row boxListaServicos">
			<?php query_posts("post_type=post&order=DESC&orderby=date&posts_per_page=3"); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

					<div class="boxPosts col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<a href="<?php the_permalink();?>" style="margin-bottom:20px">
						<!-- <a target="_blank" href="< ?php the_field('url_servico') ?>" style="margin-bottom:20px"> -->
							<div class="borderPostAbsolute"></div>
						<img src="<?php the_field('imagem_destaque_home'); ?>" />
						</a>
						<center class="big">
							<h3><?php the_title(); ?></h3>
						</center>
						<center><?php the_field('texto-servico') ?></center>
					</div>

			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>


	</div>
	<div class="row">
		<a href="<?php bloginfo('home') ?>/blog" class="btnSecundario">
		Mais postagens
		</a>
	</div>
	</div>
</section>

<section class="gridParaTodos">
	<div class="row w-100">

		<div class="container">
			<h2 class="tituloPadrao text-white">título sessão
			</h2>

			<?php query_posts("post_type=conteudo&posts_per_page=1"); ?>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post();
					 ?>

					<p class="text-center text-white">
						<?php $summary = get_field('texto_chamada_para_todos');
						echo substr($summary, 0, 480); ?>
					<?php endwhile; ?>
				<?php endif; ?>
					</p>

		</div>

	</div>
	<div class="rowLinks">

		<?php query_posts("post_type=produtos&order=ASC&order_by=name&posts_per_page=-1"); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();
				 ?>

				<!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
					<a class="btnSecundario border-white text-white w-100" href="< ?php the_field('link_do_site') ?>">
						< ?php the_title(); ?>

					</a>
				</div> -->
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

	</div>

</section>


<section class="gridContato text-white" id="contato">
	<div class="container">
		<div class="row" style="margin-bottom:0px">
			<div class="rowContato col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h2 class="tituloPadrao">FALE CONOSCO</h2>
				<?php query_posts("post_type=conteudo&posts_per_page=1"); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post();
						 ?>
						<p class="text-center">
							<?php the_field('texto_contatos'); ?>
						</p>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
	<div class="container60">
		<?php echo do_shortcode('[contact-form-7 id="138" title="Formulario-de-contato"]'); ?>
	</div>
</section>

<!--content-area -->
<?php get_footer(); ?>