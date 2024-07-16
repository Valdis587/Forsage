<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php forsage_post_thumbnail(); the_content(); ?>

</div><!-- #post-<?php the_ID(); ?> -->
