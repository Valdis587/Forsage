<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */
?>
  <div id="post-<?php the_ID(); ?>" class="swiper-slide cart__item shadow">
                    <div class="cart__left">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
                       <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                    </div>
                    <div class="cart__right-service">
                        <a class="cart__title" href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
                    </div>
                </div>