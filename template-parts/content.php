<?php
/**
 * Template part for displaying posts
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
                    <div class="cart__right">
                        <a class="cart__title" href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
                        <p class="cart__date"><?php the_date( 'Y-m-d'); ?></p>
                        <p class="cart__desc"><?php do_excerpt(get_the_excerpt(), 12); ?></p>
                        <a class="cart__link" href="<?php the_permalink(); ?>">Читать далее...</a>
                    </div>
                </div><!-- #post-<?php the_ID(); ?> -->

