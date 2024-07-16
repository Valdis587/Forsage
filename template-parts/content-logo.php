<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forsage
 */
global $forsage;
?>

<?php if(is_front_page()) { ?>
<img src="<?php echo $forsage['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
<?php } else { ?>
     <a href="<?php echo home_url(); ?>">
     <img src="<?php echo $forsage['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
 </a>
<?php } ?>
