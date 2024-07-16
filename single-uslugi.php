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
$value = redux_post_meta( 'forsage', 'table-uslugi' );
?>
 <div class="service container">
 <?php get_template_part( 'template-parts/content', 'head' ); ?>
 <div class="service__content">
 <div class="service__content-left-single">
 <div class="service__content-left-head">
                <div class="service__content-left-img">
                <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
               <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                </div>
                <div class="service__content-left-price">
                    <?php if($value['uslugi-tablefield1']) { ?>
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
							foreach ($value['uslugi-tablefield1'] as $tab => $key) { $i++ ?>
                            <tr>
                                <td><?php echo $value ['uslugi-tablefield1'][$i-1]; ?></td>
                                <td><?php echo $value ['uslugi-tablefield2'][$i-1]; ?></td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                    <?php  } ?>
                </div>
            </div>
            <div class="service__content-left-text">
            <?php the_content(); ?>
            </div>
</div>
 <?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();