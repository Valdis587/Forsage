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
<?php if($forsage['feutered-select']==1) { ?>
<section class="featured">
       <?php if($forsage['feutered-title-home']) {  ?>
    <h4 class="home__title"><?php echo $forsage['feutered-title-home']; ?></h4>
    <?php }  ?>
    <div class="featured__content container">
    <?php 
    $i=0; 
		foreach ($forsage['title_feutered'] as $tab => $key) { $i++ ?>
        <div class="featured__item shadow">
            <div class="featured__left">
                <img width="90" height="80" src="<?php echo $forsage['feutered-img'][$i-1]['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="featured__right">
                <p class="featured__title"><?php echo $forsage['title_feutered'][$i-1]; ?></p>
                <p class="featured__desc"><?php echo $forsage['textarea_feutered'][$i-1]; ?></p>
            </div>
        </div>
        <?php }  ?>
    </div>
</section>
<?php } ?>
<?php if($forsage['feutered-select']==2) { ?>
    <section class="bluefeatured">
    <div class="bluefeatured__content container">
        <div class="bluefeatured__left">
        <?php if($forsage['feutered-title-home']) {  ?>
            <h4 class="blue__title"><?php echo $forsage['feutered-title-home']; ?></h4>
            <?php } ?>
            <ul class="bluefeatured__list">
            <?php 
                 $i=0; 
		foreach ($forsage['title_feutered'] as $tab => $key) { $i++ ?>
                <li class="bluefeatured__list-item">
                    <div class="bluefeatured__list-img">
                    <img  src="<?php echo $forsage['feutered-img'][$i-1]['url']; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="bluefeatured__list-text">
                        <span class="bluefeatured__list-text-title"><?php echo $forsage['title_feutered'][$i-1]; ?></span> 
                        <p><?php echo $forsage['textarea_feutered'][$i-1]; ?></p>  
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="bluefeatured__right">
            <div class="swiper bluefeatured__swiper-big">
                <div class="swiper-wrapper bluefeatured__wrapper-big">
                    <?php
                $myGalleryIDs = explode(',', $forsage['feutered-gallery']); 
                foreach($myGalleryIDs as $myPhotoID) {
                    $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                ?>
                    <div class="swiper-slide bluefeatured__item-slide">
                        <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper bluefeatured__swiper-small">
                <div class="swiper-wrapper bluefeatured__wrapper-small">
                <?php
                $myGalleryIDs = explode(',', $forsage['feutered-gallery']); 
                foreach($myGalleryIDs as $myPhotoID) {
                    $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                ?>
                    <div class="swiper-slide bluefeatured__item-slide-small">
                    <img src="<?php echo $main[0]; ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section> 
    <?php } ?>