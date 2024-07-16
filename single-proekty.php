<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Forsage
 */

get_header();
global $forsage;
$value = redux_post_meta( 'forsage', 'proekty' );
?>
<div class="proektySingle container">
<?php get_template_part( 'template-parts/content', 'head' ); ?>
<div class="proektySingle__content">
<div class="proektySingle__left">
<div class="proektySingle__head">
                <div class="proektySingle__sleder">
                    <?php 
                      $myGalleryIDs = explode(',', $value['proekty-gallery']);
                      if($myGalleryIDs) {
                    ?>
                    <div class="swiper proektySingle__sleder-big">
                        <div class="swiper-wrapper proektySingle__sleder-big-wrapp">
                        <?php   
                        foreach($myGalleryIDs as $myPhotoID) {
                            $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                         ?>
                            <div class="swiper-slide proektySingle__item-slide-big">
                                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <?php } else { ?>
                        <div class="proektySingle__item-slide-big">
                        <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
               <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">                       
                            </div>
                    <?php }
                    $myGalleryIDs = explode(',', $value['proekty-gallery']);
                    if($myGalleryIDs) {
                    ?>
                    <div class="swiper proektySingle__sleder-small">
                        <div class="swiper-wrapper proektySingle__sleder-small-wrapp">
                        <?php 
                        foreach($myGalleryIDs as $myPhotoID) {
                            $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                         ?>
                            <div class="swiper-slide proektySingle__item-slide-small">
                            <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="proektySingle__table">
                    <?php if($value['proekty-tablefield1']) {?>
                    <table class="site-table">
                        <thead>
                            <tr>
                                <th>Вид работ</th>
                                <th>Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
							 $i =0;
							foreach ($value['proekty-tablefield1'] as $tab => $key) { $i++ ?>
                            <tr>
                                <td><?php echo $value ['proekty-tablefield1'][$i-1]; ?></td>
                                <td><?php echo $value ['proekty-tablefield2'][$i-1]; ?></td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                    <?php  } ?>
                    <div class="proektySingle__button-wrapp">
                    <a id="call-popup" class="site-button proektySingle__button" href="javascript:void(0);">Заказать проект</a>
                </div>
                </div>
            </div>
            <div class="proektySingle__text">
            <?php the_content(); ?>
            </div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();