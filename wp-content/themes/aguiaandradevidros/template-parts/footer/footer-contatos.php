<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div class="endereco">

        <?php $args = array(
            'post_type' => 'conteudo',
            'posts_per_page' => 1,                          
                                );
                                ?>
        <?php query_posts($args); ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <p><a target="_blank" href="https://web.whatsapp.com/send?phone=+55<?php the_field('telefone_link');?>"><?php the_field('telefone');?></a></p>
        <p><a target="_blank" href="tel:<?php the_field('telefone_copiar');?>"><?php the_field('telefone_copiar');?></a></p>
        <p class="pt-3"><a target="_blank" href="mailto:<?php the_field('e-mail');?>"><?php the_field('e-mail');?></a></p>
        <p class="pt-3"><?php the_field('endereco');?></p>
        <p class="pt-3"><?php the_field('endereco_atendimento');?></p>

        <?php endwhile; ?>  	
        <?php endif;?>	

    </div>

<?php endif; ?>
