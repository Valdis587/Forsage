<?php
/*
Template Name: О нас
*/
get_header(); 
global $forsage;
?>
  <div class="page container">
  <?php get_template_part( 'template-parts/content', 'head' ); ?>
  <div class="page__content">
        <div class="page__item">
        <?php if($forsage['onas-desc']) { ?>
            <div class="page__onastext">
            <?php echo $forsage['onas-desc']; ?>
            </div>
            <?php } ?>
        </div>
        <div class="page__item">
            <div class="page__onasimg">
                <img src="<?php echo $forsage['onas-img']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
    </div>
</div>
<?php
get_footer();