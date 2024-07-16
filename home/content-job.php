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
<section class="jobhome ">
    <?php if($forsage['job-title-home']) {  ?>
    <h4 class="home__title"><?php echo $forsage['job-title-home']; ?></h4>
    <?php }  ?>
    <div class="swiper jobhome__content container">
        <div class="swiper-wrapper jobhome__wrapper cart">

            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'proekty',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', 'proekty' ); ?>

                                <?php endwhile;
                            endif; ?>  
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>