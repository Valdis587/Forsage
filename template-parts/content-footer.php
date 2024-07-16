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
<div class="footer__head-content container">
            <div class="footer__head-social">
                <ul class="footer__social-list">
                <?php if($forsage['tg']) { ?>
                    <li><a aria-label="telegram" href="<?php echo $forsage['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
                    <?php } ?>
                    <?php if($forsage['sk']) { ?>
                    <li><a aria-label="skype"  href="<?php echo $forsage['sk']; ?>"><i class="icon-skype"></i></a></li>
                    <?php } ?>
                    <?php if($forsage['vb']) { ?>
                    <li><a aria-label="viber"  href="<?php echo $forsage['vb']; ?>"><i class="icon-viber"></i></a></li>
                    <?php } ?>
                    <?php if($forsage['vk']) { ?>
                    <li><a aria-label="vk"  href="<?php echo $forsage['vk']; ?>"><i class="icon-vk"></i></a></li>
                    <?php } ?>
                    <?php if($forsage['wh']) { ?>
                    <li><a aria-label="whatsapp" href="<?php echo $forsage['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
             <div class="footer__head-form">  
                  <?php if ($forsage['foo-short-form']) {
                  echo do_shortcode($forsage['foo-short-form']); ?>
                  <p>Я даю согласие на обработку моих данных</p>
                  <?php } ?>
             </div>
</div>