<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<header class="headerPost">
	<div class="tituloPost text-white">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h2 class="tituloPost">', '</h2>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="tituloPost"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>
		</div>

		<?php twenty_twenty_one_post_thumbnail(); ?>


	</header><!-- .entry-header -->

	<!-- <div class="entry-content"> -->


    <div class="container main-content">
    <div class="row boxPostagem">

				
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="imgPost">
                <img src="<?php the_field('imagem_destaque_blog');?>"/>
                </div>
				
				<div class="dataPost"><?php the_author() ?> | <?php echo get_the_date(); ?></div>

                <?php $summary = get_field('texto-postagem'); echo substr($summary, 0, -1); ?>
                
			</div>
        </div>
    

	</div>
    <!-- .entry-content -->

    


	<!-- <footer class="entry-footer default-max-width">
		< ?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer> -->
    <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
