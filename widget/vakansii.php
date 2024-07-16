<?php
/**
 * Forsage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Forsage
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

class vakansii_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    function __construct() {
        parent::__construct(
            'vakansii_widget', // Base ID
            esc_html__( 'Вакансии', '' ), // Name
            array( 'description' => '' ) // Args
        );
    }


    public function widget( $args, $instance )
    {        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        } ?>
        <div class="sidebar__widget-wrapper">
        <div class="swiper sidebar__vakansi-slider">
            <div class="swiper-wrapper sidebar__vakansi-slider-wrapp">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'vakansii',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            global $forsage;
$value = redux_post_meta( 'forsage', 'vakansii' );
            ?>
<div class="swiper-slide sidebar__vakansi-item">
                    <div class="sidebar__vakansi-img">
                    <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' );
                    ?>
                            <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                    </div>
                    <div class="sidebar__vakansi-text">
                        <p class="sidebar__vakansi-name"><?php the_title(''); ?></p>
                        <p class="sidebar__vakansi-price"><?php echo $value['vakansii-price']; ?> руб.</p>
                    </div>
                </div>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
            </div>
            <div class="sidebar__vakansi-button-wrapp">
        <a class="site-button sidebar__vakansi-button" href="<?php echo home_url(); ?>/vakansii">Все вакансии</a>
    </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Вакансии', 'smarkets' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Вакансии', 'smarkets' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }


    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

        return $instance;


    }

} // class Foo_Widget

// register Foo_Widget widget
function register_vakansii_widget() {
    register_widget( 'vakansii_Widget' );
}
add_action( 'widgets_init', 'register_vakansii_widget' );