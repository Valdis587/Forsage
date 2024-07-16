<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Forsage
 */

get_header();
?>
<div class="page container">
<?php get_template_part( 'template-parts/content', 'head' ); ?>
<div class="page__error-wrapp">
    <h2 class="page__error-title">404</h2>
    <p class="page__error-desk">Страница не найдена!</p>
</div>
<div class="page__error-button-wrapp">
<a class="page__error-button site-button" href="<?php echo home_url(); ?>">На главную</a>
</div>
</div>
<?php
get_footer();
