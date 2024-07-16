<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */
global $forsage;
$value = redux_post_meta( 'forsage', 'proekty' );
?>
  <div id="post-<?php the_ID(); ?>" class="swiper-slide cart__item shadow">
                    <div class="cart__left">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
                       <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                    </div>
                    <div class="cart__right-job">
                        <a class="cart__title" href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
                        <div class="cart__right-price">
                            <div class="cart__right-price-item">
                              <span class="item-left">Размеры:</span>
                              <span class="item-right"><?php echo $value['proekty-size']; ?> м.кв</span>
                            </div>
                            <div class="cart__right-price-item">
                                <span class="item-left">Цена:</span>
                                <span class="item-right"><?php echo $value['proekty-price']; ?> руб.</span>
                              </div>
                        </div>
                        <a class="cart__job-button" href="<?php the_permalink(); ?>">Подробнее</a>
                    </div>
                </div><!-- #post-<?php the_ID(); ?> -->