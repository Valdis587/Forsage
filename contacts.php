<?php
/*
Template Name: Контакты
*/
get_header();
global $forsage;
?>
  <div class="page container">
  <?php get_template_part( 'template-parts/content', 'head' ); ?>
            <div class="page__content">
                    <div class="page__item">
                        <ul class="page__contact-list">
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
                    <div class="page__item">
                        <?php if($forsage['map']) { 
                            echo $forsage['map'];
                        }?>
                    </div>
                </div>
</div>
<?php
get_footer();