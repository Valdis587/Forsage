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
<section class="homereviews" style="background-image: url('<?php  echo $forsage['reviews-back']['url']; ?>');">
<?php if($forsage['reviews-title-home']) { ?>
            <h4 class="blue__title"><?php  echo $forsage['reviews-title-home']; ?></h4>
            <?php }  ?>
    <div class="swiper homereviews__content container">
        <div class="swiper-wrapper home-reviews__wrapper">
        <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'otzyvy',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                                $value = redux_post_meta( 'forsage', 'otzyvy' );
                                 ?>
                                      <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                 if($main) { ?>
            <div class="swiper-slide homereviews__item">
                <div class="homereviews__item-text">
                    <p><?php do_excerpt(get_the_excerpt(), 25); ?></p>
                </div>
                <div class="homereviews__item-bottom">
                    <div class="homereviews__item-bottom-img">
                
               <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="homereviews__item-bottom-info">
                        <p class="homereviews__item-bottom-name"><?php the_title(''); ?></p>
                        <p class="homereviews__item-bottom-job"><?php echo $value['otzyvy-job']; ?></p>
                    </div>
                </div>
            </div>
            <?php } endwhile;
            endif;  ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>