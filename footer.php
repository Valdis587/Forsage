<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forsage
 */
global $forsage;
get_template_part( 'home/content', 'logo' );
?>
</div><!--end cintent wrapper-->
<footer class="footer">
    <div class="footer__head-line">
    <?php get_template_part( 'template-parts/content', 'footer' ); ?>
    </div>
    <div class="footer__menu-line container">
        <div class="footer__menu-item footer__block">
        <?php if($forsage['foo-title1']) { ?>
            <h5 class="footer__menu-title"><?php echo $forsage['foo-title1']; ?></h5>
            <?php } ?>
            <ul class="footer__contact-list">
            <?php if($forsage['phone']) { ?>
                <li><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $forsage['phone']); ?>"><i class="icon-phone-alt"></i><?php echo $forsage['phone']; ?></a></li>
                <?php } ?>
                <?php if($forsage['email']) { ?>
                <li><a href="mailto:<?php echo $forsage['email']; ?>"><i class="icon-envelope"></i><?php echo $forsage['email']; ?></a></li>
                <?php } ?>
                <?php if($forsage['adres']) { ?>
                <li><i class="icon-map-marker-alt"></i><?php echo $forsage['adres']; ?></li>
                <?php } ?>
                <?php if($forsage['time-york']) { ?>
                <li><i class="icon-clock"></i> <?php echo $forsage['time-york']; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="footer__menu-item">
        <?php if($forsage['foo-title2']) { ?>
            <h5 class="footer__menu-title"><?php echo $forsage['foo-title2']; ?></h5>
            <?php } ?>
            <?php if( has_nav_menu('menu-page') ) {
                Forsage_menu_page();
            }?>
        </div>
        <div class="footer__menu-item">
        <?php if($forsage['foo-title3']) { ?>
            <h5 class="footer__menu-title"><?php echo $forsage['foo-title3']; ?></h5>
            <?php } ?>
            <?php if( has_nav_menu('menu-service') ) {
                Forsage_menu_service();
            }?>
        </div>
        <div class="footer__menu-item footer__block">
        <?php if($forsage['foo-text']) { echo $forsage['foo-text']; }?>
        </div>
    </div>
    <div class="footer__copy">
    <?php if($forsage['foo-copy']) { echo $forsage['foo-copy']; }?>
    </div>
    <a class="footer__button-up footer__button-up-hide" href="javascript:void(0);"><i class="icon-angle-down"></i></a>
</footer>
<?php get_template_part( 'template-parts/content', 'popup' ); ?>
<!--end end popup-->
</div><!--end wrapper-->
<?php if($forsage['google']) { echo $forsage['google']; } 
if($forsage['yandex']) { echo $forsage['yandex']; } 
?>
<?php wp_footer(); ?>

</body>
</html>
