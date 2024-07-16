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
<section class="onas" style="background-image: url('<?php  echo $forsage['nonas-back']['url']; ?>');">
    <div class="onas__content container">
        <div class="onas__item">
        <?php if($forsage['nonas-title-home']) { ?>
            <h4 class="blue__title"><?php  echo $forsage['nonas-title-home']; ?></h4>
            <?php }  ?>
            <div class="onas__text">
            <?php if($forsage['nonas-text-left']) { echo $forsage['nonas-text-left']; } ?>
            </div>
        </div>
        <div class="onas__item onas__right">
            <div class="onas__img">
            <img src="<?php echo $forsage['nonas-img-right']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="onas__tre"></div>
        </div>
    </div>
</section>