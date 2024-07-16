<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Forsage
 */

get_header();
?>
 <div class="blog container">
	<?php get_template_part( 'template-parts/content', 'head' ); ?>
	<div class="blog__content">
	<div class="blog__content-left">
	<div class="blog__content-wrapper cart">
		<?php
	if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile;

	else:

		get_template_part( 'template-parts/content', 'none' );

	endif;

		?>
		</div>
		<?php wp_main_pagination() ?>
		</div>
		<?php get_sidebar(); ?>
	</div><!-- #main -->
</div>
<?php
get_footer();
