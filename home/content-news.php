<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */
global $forsage;
?>
<section class="news cart">
    <?php if($forsage['news-title-home']) { ?>
    <h4 class="home__title"><?php  echo $forsage['news-title-home']; ?></h4>
    <?php }  ?>
    <div class="swiper news__content container">
        <div class="swiper-wrapper news__wrapper ">
        <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'post',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

                                <?php endwhile;
                            endif; ?>
</div>
<div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
</div>
</section>

