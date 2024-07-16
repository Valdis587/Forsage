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
<section class="home-serv">
    <?php if($forsage['serv-title-home']) { ?>
    <h4 class="home__title"><?php  echo $forsage['serv-title-home']; ?></h4>
    <?php } ?>
        <div class="swiper home-serv__content container">
            <div class="swiper-wrapper home-serv__wrapper">

                 <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'uslugi',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', 'uslugi' ); ?>

                                <?php endwhile;
                            endif; ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
</section> 