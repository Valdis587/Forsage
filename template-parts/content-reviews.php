<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */
?>

<div id="post-<?php the_ID(); ?>" class="reviews__item shadow">
                    <p class="reviews__name"><?php the_title(''); ?></p>
                    <p class="reviews__date"><?php the_date( 'Y-m-d'); ?></p>
                    <div class="reviews__rebiews"><?php the_content(); ?></div>
                </div><!-- #post-<?php the_ID(); ?> -->