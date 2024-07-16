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
<section class="logo">
    <div class="swiper logo__slider container">
        <div class="swiper-wrapper logo__wrapper">
            <?php 
             $myGalleryIDs = explode(',', $forsage['logo-home-gallery']);
             foreach($myGalleryIDs as $myPhotoID) {
                $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
             ?>
            <div class="swiper-slide logo__item">
            <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>