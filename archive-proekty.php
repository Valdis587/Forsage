<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */

get_header();
?>
  <div class="job container">
  <?php get_template_part( 'template-parts/content', 'head' ); ?>
  <div class="job__content">
        <div class="job__content-left">
        <div class="job__content-wrapper cart">
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
        <?php wp_main_pagination() ?>
        </div>
<?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();