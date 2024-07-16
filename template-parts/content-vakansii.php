<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */
global $forsage;
$value = redux_post_meta( 'forsage', 'vakansii' );
?>

<div id="post-<?php the_ID(); ?>"  class="vakansi__item shadow">
                        <div class="vakansi__item-left">
                        <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
                            <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                        </div>
                        <div class="vakansi__item-right">
                            <p class="vakansi__item-name"><?php the_title(''); ?></p>
                            <p class="vakansi__item-price"><?php echo $value['vakansii-price']; ?> руб.</p>
                            <div class="vakansi__item-desc"><?php the_content(); ?></div>
                        </div>
                    </div><!-- #post-<?php the_ID(); ?> -->