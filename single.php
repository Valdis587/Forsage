<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Forsage
 */

get_header();
?>
 <div class="blog container">
 <?php get_template_part( 'template-parts/content', 'head' ); ?>
<div class="blog__content">
        <div class="single">
            <div class="single__wrapp">
            <div class="single__img">
			<?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
               <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
            </div>
            <div class="single__info">
                 <span class="single__date"><i class="icon-calendar-alt"></i><?php the_date( 'Y-m-d'); ?></span>
                    <span class="single__autor"><i class="icon-user-alt"></i>Автор: <?php the_author(); ?></span>
                 <span class="single__comment"><i class="icon-comments"></i><?php echo comments_number(); ?></span>
            </div>
            <div class="single__desc">
			        <?php the_content(); ?>
            </div>
            <?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
            </div>
        </div><!--single-->
<?php
get_sidebar(); ?>
    </div>
    </div><!--blog container-->
<?php
get_footer();
