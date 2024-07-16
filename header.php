<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forsage
 */
global $forsage;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" sizes="120x120" href="<?php echo home_url(); ?>/favicon.svg" type="image/svg+xml" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
   <header class="header">
    <div class="header__head container">
        <div class="header__logo">
        <?php get_template_part( 'template-parts/content', 'logo' ); ?>
        </div>
        <div class="header__info">
            <div class="header__time">
                <span class="header__icon"><i class="icon-clock"></i></span>
                <div class="header__time-wrapp">
                    <?php if($forsage['time-york']) { ?>
                <p>Часы работы:</p>
                <span class="header__icon-text"><?php echo $forsage['time-york']; ?></span>
                <?php if($forsage['time-york-desc']) { ?>
                <p><?php echo $forsage['time-york-desc']; ?></p>
                <?php } } ?>
            </div>
            </div>
            <div class="header__adres">
                <span class="header__icon"><i class="icon-map-marker-alt"></i></span>
                <div class="header__adres-wrapp">
                <?php if($forsage['adres']) { ?>
                <p>Адрес:</p>
                <span class="header__icon-text"><?php echo $forsage['adres']; ?></span>
                <?php if($forsage['adres-desc']) { ?>
                <p><?php echo $forsage['adres-desc']; ?></p>
                <?php } } ?>
            </div>
            </div>
        </div>
        <div class="header__phone">
        <?php if($forsage['phone']) { ?>
            <a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $forsage['phone']); ?>" ><i class="icon-phone-alt"></i><?php echo $forsage['phone']; ?></a>
            <?php } ?>
        </div>
    </div>
    <div class="header__menu-line">
        <div class="header__menu container">
        <button aria-label="menu" class="header__burger"><i class="icon-bars"></i></button>
        <nav class="header__menu-nav">
        <button aria-label="menu-close" class="header__menu-close"><i class="icon-plus"></i></button>
        <?php if( has_nav_menu('menu-primary') ) {
                        Forsage_menu_primary();
                    }?>
                    </nav>
                <a href="javascript:void(0);" id="call-popup" class="header__button"><i class="icon-envelope"></i>Заказать звонок</a>
        </div>
    </div>
</header>
   <div class="content-wrapper">