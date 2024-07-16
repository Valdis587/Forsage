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
  <section class="homeslider">
    <h1 class="homeslider__h1"><?php if($forsage['slider-home-title']) { echo $forsage['slider-home-title']; } ?></h1>
    <div class="swiper homeslider__slider">
        <div class="swiper-wrapper homeslider__wrapper">
        <?php foreach( $forsage['slider-home-slides'] as $slide )  { ?>
            <div class="swiper-slide homeslider__item">
                <div class="homeslider__img">
                    <img src="<?php echo $slide['image']; ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="homeslider__text-wraper">
                <div class="homeslider__text container">
                    <h2 class="homeslider__title"><?php echo $slide['title']; ?></h2>
                    <h3 class="homeslider__title-sm"><?php echo $slide['description']; ?></h3>
                </div>
            </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>