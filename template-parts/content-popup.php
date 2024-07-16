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
<div id="mini" class="popup">
    <div class="popup__body popup__show">   
        <div class="popup__content">
          <button aria-label="popup close" class="popup__close"><i class="icon-plus"></i></button>
              <h6 class="popup__title">Заказать звонок</h6>
              <?php if ($forsage['popup-short-form']) {
                  echo do_shortcode($forsage['popup-short-form']); ?>
                  <?php } ?>
</div>
</div>
</div>