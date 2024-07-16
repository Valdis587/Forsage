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
  <div class="blog container">
  <?php get_template_part( 'template-parts/content', 'head' ); ?>
  <div class="blog__content">
  <div class="blog__content-left">
  <div class="vakansi">
                <div class="vakansi__content">
                <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'vakansii',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', 'vakansii' ); ?>

                                <?php endwhile;
                            endif; ?>
    </div>
</div>
  <?php wp_main_pagination() ?>
  </div>
  <?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();